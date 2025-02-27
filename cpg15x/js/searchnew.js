/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2014 Coppermine Dev Team
  v1.0 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.28
  $HeadURL: https://svn.code.sf.net/p/coppermine/code/trunk/cpg1.5.x/js/searchnew.js $
  $Revision: 8683 $
**********************************************/

var error_occured = false;
var already_submitted = false;

// Queue manager object - manages the queue
var qm = {

    // Store the assigned process limits
    maxprocesses: js_vars.proc_limit,
    
    // Concurrent process counter
    processes: 0,
    
    // List of jobs which are pending
    pending: [],
    
    // Selected album
    aid: 0,
        
    // Looks for a chance to start new jobs 
    step: function () {

        // Starts as many as limit allows, assuming we have anything left to do
        while (this.processes < this.maxprocesses && this.pending.length > 0) {
        
            // Grab next job from pending list
            var nextjob = this.pending.shift();
            
            // signal it to start
            nextjob.commence();
            
            // increment the process counter
            this.processes++;
        }
    },

    // Add a job to the pending queue
    add: function (job) {
        this.pending.push(job);
    },

    // Queue manager is notified of a completed job 
    notifydone: function () {

        // Decrement the process counter
        this.processes--;
        
        // Look for next job
        this.step();
        
        // If queue is empty and that was last running job we announce completion
        if (this.pending.length === 0 && this.processes === 0) {
            this.queuedone();
        }
    },
    
    queuedone: function () {
        if (error_occured) {
            $('#submit_button').html('<img src="images/message/error.png" border="0" alt="" width="16" height="16" class="icon" />');
            $('#submit_button_bottom').html('<img src="images/icons/ok.png" border="0" alt="" width="16" height="16" class="icon" />' + js_vars.lang_continue).removeAttr('disabled').click(function(){redirect('editpics.php?album=' + qm.aid);});
        } else {
            redirect('editpics.php?album=' + this.aid);
        }
    }
};

// Job class - represents a single job in the system
function Job(obj) {

    // This is the object we are representing, update its status as things happen
    this.obj = obj;
    
    // Register methods
    this.commence = job_start;
    this.notifydone = job_done;
    this.notifyfailed = job_failed;
}

// Start the job
function job_start() {
    
    // Get url stub from the p tag's name
    var url = this.obj.getAttribute('name');
    
    // append the album id
    url += '&aid=' + qm.aid;
    
    // Send http request
    request(url, this);
}

// Job is completed
function job_done(response) {

    var src;
    var title = '';

    if (response.match(/(Fatal error).*(Allowed memory size of)/)) {
        src = 'images/message/stop.png';
        title = strip_tags(response);
        error_occured = true;
    } else {
        switch (response) {

        case 'OK':
            src = 'images/batch/ok.png';
            break;

        case 'DUPE':
            src = 'images/batch/duplicate.png';
            break;

        default:
            src = 'images/batch/unknown.png';
            title = strip_tags(response);
            error_occured = true;
            break;
        }
    }

    $(this.obj).append($('<img />').attr('src', src).attr('title', title));
    
    // Notify the queue manager
    qm.notifydone();
}

// Job has failed (http request failed)
function job_failed(request) {
    error_occured = true;
    job_done(request.statusText);
}

// Sends the http request
function request(url, job) {

    $.ajax({
        url: url,
        cache: false,
        success: function (data) {
            job.notifydone(data);
        },
        error: function (data) {
            job.notifyfailed(data);
        }
    });
}

// Start the script
function process() {

    var aidbox = document.getElementById('aid');
    
    // append the album id
    qm.aid = aidbox.options[aidbox.selectedIndex].value;
    
    if (qm.aid == 0) {
        alert(js_vars.no_album_selected);
        return false;
    }
    
    // Collect object that represent jobs from the html list
    var queuelist = document.getElementById('queue');
    var objects = queuelist.getElementsByTagName('p');
    var selected_files = 0;

    // Cycle through the objects, making jobs from them, adding them to the queue manager
    for (var i = 0; i < objects.length; i++) {
    
        // if this is image is not selected then skip it
        if (document.getElementById('checkbox_' + objects[i].id).checked === false) {
            continue;
        }
        
        selected_files++;
        
        // add job to queue
        qm.add(new Job(objects[i]));
        
        // clear the display from any previous run
        objects[i].innerHTML = '';
    }
    
    if (selected_files == 0) {
        alert(js_vars.no_file_selected);
        return false;
    }
    
    // Start the queue manager
    qm.step();
    
    // Disable buttons and show loader image
    if (!already_submitted) {
        $('#submit_button, #submit_button_bottom').html('<img src="images/loader.gif" border="0" alt="" width="16" height="16" class="icon" />').attr('disabled', 'disabled');
    }
    already_submitted = true;
    
    return false;
}

function searchnewPageLoaded() {
    $('#submit_button, #submit_button_bottom').click(process);
}

addonload('searchnewPageLoaded()');