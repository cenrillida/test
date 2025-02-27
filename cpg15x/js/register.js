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
  $HeadURL: https://svn.code.sf.net/p/coppermine/code/trunk/cpg1.5.x/js/register.js $
  $Revision: 8683 $
**********************************************/

$(document).ready(function() {
    $('.formFieldWarning').hide();})

function checkRegisterFormSubmit() {
    $('.formFieldWarning').hide();
    var errors = 0;
    // Check the user name
    if($('#username').val() == '') {
        $('#username_warning1').show();
        errors++;
    } else {
        if ($('#username').val().length < 2 ) {
            $('#username_warning2').show();
            errors++;
        }
    }
    // Check the password
    if ($('#password').val().length < 2 ) {
        $('#password_warning1').show();
        errors++;
    } else {
        if ($('#password').val() == $('#username').val() ) {
            $('#password_warning2').show();
            errors++;
        }
    }
    // Check the password_verification
    if ($('#password_verification').val() != $('#password').val() ) {
        $('#password_verification_warning1').show();
        errors++;
    }
    // Check the email address
    if($('#email').val() == '') {
        $('#email_warning1').show();
        errors++;
    } else {
        if ($('#email').val().search(/^\w+((-|\.|\+)\w+)*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]{2,63}$/) == -1) {
            $('#email_warning2').show();
            errors++;
        }
    }
    if (errors != 0) {
        $('#form_not_submit_top').show();
        $('#form_not_submit_bottom').show();
        return false;
    } else {
        return true;
    }
}


