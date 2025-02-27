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
  $HeadURL: https://svn.code.sf.net/p/coppermine/code/trunk/cpg1.5.x/include/transliteration/xd2.php $
  $Revision: 8683 $
**********************************************/

$base = array(
  0x00 => 'toels', 'toelt', 'toelp', 'toelh', 'toem', 'toeb', 'toebs', 'toes', 'toess', 'toeng', 'toej', 'toec', 'toek', 'toet', 'toep', 'toeh',
  0x10 => 'tyo', 'tyog', 'tyogg', 'tyogs', 'tyon', 'tyonj', 'tyonh', 'tyod', 'tyol', 'tyolg', 'tyolm', 'tyolb', 'tyols', 'tyolt', 'tyolp', 'tyolh',
  0x20 => 'tyom', 'tyob', 'tyobs', 'tyos', 'tyoss', 'tyong', 'tyoj', 'tyoc', 'tyok', 'tyot', 'tyop', 'tyoh', 'tu', 'tug', 'tugg', 'tugs',
  0x30 => 'tun', 'tunj', 'tunh', 'tud', 'tul', 'tulg', 'tulm', 'tulb', 'tuls', 'tult', 'tulp', 'tulh', 'tum', 'tub', 'tubs', 'tus',
  0x40 => 'tuss', 'tung', 'tuj', 'tuc', 'tuk', 'tut', 'tup', 'tuh', 'tweo', 'tweog', 'tweogg', 'tweogs', 'tweon', 'tweonj', 'tweonh', 'tweod',
  0x50 => 'tweol', 'tweolg', 'tweolm', 'tweolb', 'tweols', 'tweolt', 'tweolp', 'tweolh', 'tweom', 'tweob', 'tweobs', 'tweos', 'tweoss', 'tweong', 'tweoj', 'tweoc',
  0x60 => 'tweok', 'tweot', 'tweop', 'tweoh', 'twe', 'tweg', 'twegg', 'twegs', 'twen', 'twenj', 'twenh', 'twed', 'twel', 'twelg', 'twelm', 'twelb',
  0x70 => 'twels', 'twelt', 'twelp', 'twelh', 'twem', 'tweb', 'twebs', 'twes', 'twess', 'tweng', 'twej', 'twec', 'twek', 'twet', 'twep', 'tweh',
  0x80 => 'twi', 'twig', 'twigg', 'twigs', 'twin', 'twinj', 'twinh', 'twid', 'twil', 'twilg', 'twilm', 'twilb', 'twils', 'twilt', 'twilp', 'twilh',
  0x90 => 'twim', 'twib', 'twibs', 'twis', 'twiss', 'twing', 'twij', 'twic', 'twik', 'twit', 'twip', 'twih', 'tyu', 'tyug', 'tyugg', 'tyugs',
  0xA0 => 'tyun', 'tyunj', 'tyunh', 'tyud', 'tyul', 'tyulg', 'tyulm', 'tyulb', 'tyuls', 'tyult', 'tyulp', 'tyulh', 'tyum', 'tyub', 'tyubs', 'tyus',
  0xB0 => 'tyuss', 'tyung', 'tyuj', 'tyuc', 'tyuk', 'tyut', 'tyup', 'tyuh', 'teu', 'teug', 'teugg', 'teugs', 'teun', 'teunj', 'teunh', 'teud',
  0xC0 => 'teul', 'teulg', 'teulm', 'teulb', 'teuls', 'teult', 'teulp', 'teulh', 'teum', 'teub', 'teubs', 'teus', 'teuss', 'teung', 'teuj', 'teuc',
  0xD0 => 'teuk', 'teut', 'teup', 'teuh', 'tyi', 'tyig', 'tyigg', 'tyigs', 'tyin', 'tyinj', 'tyinh', 'tyid', 'tyil', 'tyilg', 'tyilm', 'tyilb',
  0xE0 => 'tyils', 'tyilt', 'tyilp', 'tyilh', 'tyim', 'tyib', 'tyibs', 'tyis', 'tyiss', 'tying', 'tyij', 'tyic', 'tyik', 'tyit', 'tyip', 'tyih',
  0xF0 => 'ti', 'tig', 'tigg', 'tigs', 'tin', 'tinj', 'tinh', 'tid', 'til', 'tilg', 'tilm', 'tilb', 'tils', 'tilt', 'tilp', 'tilh',
);
