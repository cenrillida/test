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
  $HeadURL: https://svn.code.sf.net/p/coppermine/code/trunk/cpg1.5.x/include/transliteration/xae.php $
  $Revision: 8683 $
**********************************************/

$base = array(
  0x00 => 'geul', 'geulg', 'geulm', 'geulb', 'geuls', 'geult', 'geulp', 'geulh', 'geum', 'geub', 'geubs', 'geus', 'geuss', 'geung', 'geuj', 'geuc',
  0x10 => 'geuk', 'geut', 'geup', 'geuh', 'gyi', 'gyig', 'gyigg', 'gyigs', 'gyin', 'gyinj', 'gyinh', 'gyid', 'gyil', 'gyilg', 'gyilm', 'gyilb',
  0x20 => 'gyils', 'gyilt', 'gyilp', 'gyilh', 'gyim', 'gyib', 'gyibs', 'gyis', 'gyiss', 'gying', 'gyij', 'gyic', 'gyik', 'gyit', 'gyip', 'gyih',
  0x30 => 'gi', 'gig', 'gigg', 'gigs', 'gin', 'ginj', 'ginh', 'gid', 'gil', 'gilg', 'gilm', 'gilb', 'gils', 'gilt', 'gilp', 'gilh',
  0x40 => 'gim', 'gib', 'gibs', 'gis', 'giss', 'ging', 'gij', 'gic', 'gik', 'git', 'gip', 'gih', 'gga', 'ggag', 'ggagg', 'ggags',
  0x50 => 'ggan', 'gganj', 'gganh', 'ggad', 'ggal', 'ggalg', 'ggalm', 'ggalb', 'ggals', 'ggalt', 'ggalp', 'ggalh', 'ggam', 'ggab', 'ggabs', 'ggas',
  0x60 => 'ggass', 'ggang', 'ggaj', 'ggac', 'ggak', 'ggat', 'ggap', 'ggah', 'ggae', 'ggaeg', 'ggaegg', 'ggaegs', 'ggaen', 'ggaenj', 'ggaenh', 'ggaed',
  0x70 => 'ggael', 'ggaelg', 'ggaelm', 'ggaelb', 'ggaels', 'ggaelt', 'ggaelp', 'ggaelh', 'ggaem', 'ggaeb', 'ggaebs', 'ggaes', 'ggaess', 'ggaeng', 'ggaej', 'ggaec',
  0x80 => 'ggaek', 'ggaet', 'ggaep', 'ggaeh', 'ggya', 'ggyag', 'ggyagg', 'ggyags', 'ggyan', 'ggyanj', 'ggyanh', 'ggyad', 'ggyal', 'ggyalg', 'ggyalm', 'ggyalb',
  0x90 => 'ggyals', 'ggyalt', 'ggyalp', 'ggyalh', 'ggyam', 'ggyab', 'ggyabs', 'ggyas', 'ggyass', 'ggyang', 'ggyaj', 'ggyac', 'ggyak', 'ggyat', 'ggyap', 'ggyah',
  0xA0 => 'ggyae', 'ggyaeg', 'ggyaegg', 'ggyaegs', 'ggyaen', 'ggyaenj', 'ggyaenh', 'ggyaed', 'ggyael', 'ggyaelg', 'ggyaelm', 'ggyaelb', 'ggyaels', 'ggyaelt', 'ggyaelp', 'ggyaelh',
  0xB0 => 'ggyaem', 'ggyaeb', 'ggyaebs', 'ggyaes', 'ggyaess', 'ggyaeng', 'ggyaej', 'ggyaec', 'ggyaek', 'ggyaet', 'ggyaep', 'ggyaeh', 'ggeo', 'ggeog', 'ggeogg', 'ggeogs',
  0xC0 => 'ggeon', 'ggeonj', 'ggeonh', 'ggeod', 'ggeol', 'ggeolg', 'ggeolm', 'ggeolb', 'ggeols', 'ggeolt', 'ggeolp', 'ggeolh', 'ggeom', 'ggeob', 'ggeobs', 'ggeos',
  0xD0 => 'ggeoss', 'ggeong', 'ggeoj', 'ggeoc', 'ggeok', 'ggeot', 'ggeop', 'ggeoh', 'gge', 'ggeg', 'ggegg', 'ggegs', 'ggen', 'ggenj', 'ggenh', 'gged',
  0xE0 => 'ggel', 'ggelg', 'ggelm', 'ggelb', 'ggels', 'ggelt', 'ggelp', 'ggelh', 'ggem', 'ggeb', 'ggebs', 'gges', 'ggess', 'ggeng', 'ggej', 'ggec',
  0xF0 => 'ggek', 'gget', 'ggep', 'ggeh', 'ggyeo', 'ggyeog', 'ggyeogg', 'ggyeogs', 'ggyeon', 'ggyeonj', 'ggyeonh', 'ggyeod', 'ggyeol', 'ggyeolg', 'ggyeolm', 'ggyeolb',
);
