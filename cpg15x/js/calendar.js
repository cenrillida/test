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
  $HeadURL: https://svn.code.sf.net/p/coppermine/code/trunk/cpg1.5.x/js/calendar.js $
  $Revision: 8683 $
**********************************************/

function sendDate(month, day, year) 
{
    // pad with blank zeros numbers under 10
    month = month < 10 ? '0' + month : month;
    day   = day   < 10 ? '0' + day   : day;

    var date = year + '-' + month + '-' + day;
    
    parent.document.location = 'thumbnails.php?album=datebrowse&date=' + date;
}
