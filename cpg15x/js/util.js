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
  $HeadURL: https://svn.code.sf.net/p/coppermine/code/trunk/cpg1.5.x/js/util.js $
  $Revision: 8683 $
**********************************************/

function init_utils(){
    jQuery.each($("div[id$='_wrapper']"), function(){
        $(this).css('display', 'none');                   
    });
    jQuery.each($("input[type='radio'][name='action']"), function(){
        $(this).change(function(){
            jQuery.each($("input[type='radio'][name='action']"), function(){
                $('#' + this.getAttribute('id') + '_wrapper').css('display', (this.checked) ? 'block' : 'none');
            });
        });               
    });
}

addonload('init_utils()');