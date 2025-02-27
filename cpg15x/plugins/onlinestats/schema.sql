##  ********************************************
##  Coppermine Photo Gallery
##  ************************
##  Copyright (c) 2003-2014 Coppermine Dev Team
##  v1.0 originally written by Gregory Demar
##
##  This program is free software; you can redistribute it and/or modify
##  it under the terms of the GNU General Public License version 3
##  as published by the Free Software Foundation.
##
##  ********************************************
##  Coppermine version: 1.5.28
##  $HeadURL: https://svn.code.sf.net/p/coppermine/code/trunk/cpg1.5.x/plugins/onlinestats/schema.sql $
##  $Revision: 8683 $
##  ********************************************

CREATE TABLE IF NOT EXISTS `CPG_mod_online` (
  `user_id` int(11) NOT NULL default '0',
  `user_name` varchar(25) NOT NULL default '',
  `user_ip` tinytext NOT NULL,
  `last_action` datetime default NULL,
PRIMARY KEY  (`user_id`,`user_ip`(15))
);
INSERT IGNORE INTO CPG_config ( `name` , `value` ) VALUES ('record_online_users', '1'), ('record_online_date', UNIX_TIMESTAMP());