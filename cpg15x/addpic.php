<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2014 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.28
  $HeadURL: https://svn.code.sf.net/p/coppermine/code/trunk/cpg1.5.x/addpic.php $
  $Revision: 8683 $
**********************************************/

define('IN_COPPERMINE', true);

define('ADDPIC_PHP', true);
define('DB_INPUT_PHP', true);

require('include/init.inc.php');
require('include/picmgmt.inc.php');

if (!GALLERY_ADMIN_MODE) {
    die('Access denied');
}

$aid = $superCage->get->getInt('aid');

/**
 * TODO: $_GET['pic_file'] cannot be cleaned sensibly with current methods available. Refactor.
 */
$matches   = $superCage->get->getMatched('pic_file', '/^[0-9A-Za-z=\+\/]+$/');
$pic_file  = base64_decode($matches[0]);
$dir_name  = dirname($pic_file) . '/';
$file_name = basename($pic_file);

// Replace the windows directory separator with /
$dir_name = str_replace('\\\\', '/', $dir_name);
$dir_name = str_replace('\\', '/', $dir_name);

// Create the holder $picture_name by translating the file name.
// Translate any forbidden character into an underscore.
$source    = './' . $CONFIG['fullpath'] . $dir_name . $file_name;
$file_name = CPGPluginAPI::filter('upload_file_name', $file_name);
$sane_name = replace_forbidden($file_name);

rename($source, './' . $CONFIG['fullpath'] . $dir_name . $sane_name);

$sql = "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE filepath='" . addslashes($dir_name) . "' AND filename='" . addslashes($file_name) . "' LIMIT 1";

$result = cpg_db_query($sql);

if (mysql_num_rows($result)) {
    $status = 'DUPE';
} elseif (($result = add_picture($aid, $dir_name, $sane_name)) === true) {
    $status = 'OK';
} else {
    $status = $result['error'];
}

if (ob_get_length()) {
    ob_end_clean();
}

echo $status;

?>