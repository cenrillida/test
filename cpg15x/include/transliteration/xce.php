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
  $HeadURL: https://svn.code.sf.net/p/coppermine/code/trunk/cpg1.5.x/include/transliteration/xce.php $
  $Revision: 8683 $
**********************************************/

$base = array(
  0x00 => 'cwik', 'cwit', 'cwip', 'cwih', 'cyu', 'cyug', 'cyugg', 'cyugs', 'cyun', 'cyunj', 'cyunh', 'cyud', 'cyul', 'cyulg', 'cyulm', 'cyulb',
  0x10 => 'cyuls', 'cyult', 'cyulp', 'cyulh', 'cyum', 'cyub', 'cyubs', 'cyus', 'cyuss', 'cyung', 'cyuj', 'cyuc', 'cyuk', 'cyut', 'cyup', 'cyuh',
  0x20 => 'ceu', 'ceug', 'ceugg', 'ceugs', 'ceun', 'ceunj', 'ceunh', 'ceud', 'ceul', 'ceulg', 'ceulm', 'ceulb', 'ceuls', 'ceult', 'ceulp', 'ceulh',
  0x30 => 'ceum', 'ceub', 'ceubs', 'ceus', 'ceuss', 'ceung', 'ceuj', 'ceuc', 'ceuk', 'ceut', 'ceup', 'ceuh', 'cyi', 'cyig', 'cyigg', 'cyigs',
  0x40 => 'cyin', 'cyinj', 'cyinh', 'cyid', 'cyil', 'cyilg', 'cyilm', 'cyilb', 'cyils', 'cyilt', 'cyilp', 'cyilh', 'cyim', 'cyib', 'cyibs', 'cyis',
  0x50 => 'cyiss', 'cying', 'cyij', 'cyic', 'cyik', 'cyit', 'cyip', 'cyih', 'ci', 'cig', 'cigg', 'cigs', 'cin', 'cinj', 'cinh', 'cid',
  0x60 => 'cil', 'cilg', 'cilm', 'cilb', 'cils', 'cilt', 'cilp', 'cilh', 'cim', 'cib', 'cibs', 'cis', 'ciss', 'cing', 'cij', 'cic',
  0x70 => 'cik', 'cit', 'cip', 'cih', 'ka', 'kag', 'kagg', 'kags', 'kan', 'kanj', 'kanh', 'kad', 'kal', 'kalg', 'kalm', 'kalb',
  0x80 => 'kals', 'kalt', 'kalp', 'kalh', 'kam', 'kab', 'kabs', 'kas', 'kass', 'kang', 'kaj', 'kac', 'kak', 'kat', 'kap', 'kah',
  0x90 => 'kae', 'kaeg', 'kaegg', 'kaegs', 'kaen', 'kaenj', 'kaenh', 'kaed', 'kael', 'kaelg', 'kaelm', 'kaelb', 'kaels', 'kaelt', 'kaelp', 'kaelh',
  0xA0 => 'kaem', 'kaeb', 'kaebs', 'kaes', 'kaess', 'kaeng', 'kaej', 'kaec', 'kaek', 'kaet', 'kaep', 'kaeh', 'kya', 'kyag', 'kyagg', 'kyags',
  0xB0 => 'kyan', 'kyanj', 'kyanh', 'kyad', 'kyal', 'kyalg', 'kyalm', 'kyalb', 'kyals', 'kyalt', 'kyalp', 'kyalh', 'kyam', 'kyab', 'kyabs', 'kyas',
  0xC0 => 'kyass', 'kyang', 'kyaj', 'kyac', 'kyak', 'kyat', 'kyap', 'kyah', 'kyae', 'kyaeg', 'kyaegg', 'kyaegs', 'kyaen', 'kyaenj', 'kyaenh', 'kyaed',
  0xD0 => 'kyael', 'kyaelg', 'kyaelm', 'kyaelb', 'kyaels', 'kyaelt', 'kyaelp', 'kyaelh', 'kyaem', 'kyaeb', 'kyaebs', 'kyaes', 'kyaess', 'kyaeng', 'kyaej', 'kyaec',
  0xE0 => 'kyaek', 'kyaet', 'kyaep', 'kyaeh', 'keo', 'keog', 'keogg', 'keogs', 'keon', 'keonj', 'keonh', 'keod', 'keol', 'keolg', 'keolm', 'keolb',
  0xF0 => 'keols', 'keolt', 'keolp', 'keolh', 'keom', 'keob', 'keobs', 'keos', 'keoss', 'keong', 'keoj', 'keoc', 'keok', 'keot', 'keop', 'keoh',
);
