<?php

  $a = 3*$s;
  $s = 0.15;

  $skills = array(
  'Barter' => '0.15',
  'Big Guns' => '0.15',
  'Energy Weapons' => '0.15',
  'Explosives' => '0.15',
  'Lockpick' => '0.15',
  'Medicine' => '0.15',
  'Melee Weapons' => '0.15',
  'Repair' => '0.15',
  'Science' => '0.15',
  'Small Guns' => '0.15',
  'Sneak' => '0.15',
  'Speech' => '0.15',
  'Unarmed' => '0.15',
  );
  $rand_keys = array_rand($b, 3);
  echo $b[$rand_keys[0]] + $s . "\n";
  echo $b[$rand_keys[1]] + $s. "\n";
  echo $b[$rand_keys[2]] + $s. "\n"





  print_r($skills);
