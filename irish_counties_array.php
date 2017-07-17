<?php

  /** This associative array displays the counties in Irish but stores the keys in
      English.
  **/
  $counties['irish_listed'] = array(
    'Antrim' => 'Aontroim',
    'Armagh' => 'Ard Mhacha',
    'Carlow' => 'Ceatharlach ',
    'Cavan' => 'An Cabhán',
    'Clare' => 'An Clár',
    'Cork' => 'Corcaigh',
    'Derry' => 'Doire',
    'Donegal' => 'Dún na nGall',
    'Down' => 'An Dún',
    'Dublin' => 'Baile Átha Cliath',
    'Fermanagh' => 'Fear Manach',
    'Galway' => 'Gaillimh',
    'Kerry' => 'Ciarraí',
    'Kildare' => 'Cill Dara',
    'Kilkenny' => 'Cill Chainnigh',
    'Laois' => 'Laois',
    'Leitrim' => 'Liatroim',
    'Limerick' => 'Luimneach',
    'Longford' => 'An Longfort',
    'Louth' => 'Lú',
    'Mayo' => 'Maigh Eo',
    'Meath' => 'An Mhí',
    'Monaghan' => 'Muineachán',
    'Offaly' => 'Uíbh Fhailí',
    'Roscommon' => 'Ros Comáin',
    'Sligo' => 'Sligeach',
    'Tipperary' => 'Tiobraid Árann',
    'Tyrone' => 'Tír Eoghain',
    'Waterford' => 'Port Láirge',
    'Westmeath' => 'An Iarmhí',
    'Wexford' => 'Loch Garman',
    'Wicklow' => 'Cill Mhantáin'
  );

  /** This associative array displays the counties in English but stores the keys in
      Irish.
  **/
  $counties['english_listed'] = array(
    'Aontroim' => 'Antrim',
    'Ard Mhacha' => 'Armagh',
    'Ceatharlach' => 'Carlow',
    'An Cabhán' => 'Cavan',
    'An Clár' => 'Clare',
    'Corcaigh' => 'Cork',
    'Doire' => 'Derry',
    'Dún na nGall' => 'Donegal',
    'An Dún' => 'Down',
    'Baile Átha Cliath' => 'Dublin',
    'Fear Manach' => 'Fermanagh',
    'Gaillimh' => 'Galway',
    'Ciarraí' => 'Kerry',
    'Cill Dara' => 'Kildare',
    'Cill Chainnigh' => 'Kilkenny',
    'Laois' => 'Laois',
    'Liatroim' => 'Leitrim',
    'Luimneach' => 'Limerick',
    'An Longfort' => 'Longford',
    'Lú' => 'Louth',
    'Maigh Eo' => 'Mayo',
    'An Mhí' => 'Meath',
    'Muineachán' => 'Monaghan',
    'Uíbh Fhailí' => 'Offaly',
    'Ros Comáin' => 'Roscommon',
    'Sligeach' => 'Sligo',
    'Tiobraid Árann' => 'Tipperary',
    'Tír Eoghain' => 'Tyrone',
    'Port Láirge' => 'Waterford',
    'An Iarmhí' => 'Westmeath',
    'Loch Garman' => 'Wexford',
    'Cill Mhantáin' => 'Wicklow'
  );

  /** This associative array displays the values in Irish and stores the keys in Irish also.
      The keys are stored using lower-case and underscore spacing as is commonly the
      convention. Also, the foda's are removed to make it safer for databse entry.
  **/
  $counties['geailge'] = array(
    'aontroim' => 'Aontroim',
    'ard_mhacha' => 'Ard Mhacha',
    'ceatharlach' => 'Ceatharlach',
    'an_cabhan' => 'An Cabhán',
    'an_clar' => 'An Clár',
    'corcaigh' => 'Corcaigh',
    'doire' => 'Doire',
    'dun_na_ngall' => 'Dún na nGall',
    'an_dun' => 'An Dún',
    'baile_atha_cliath' => 'Baile Átha Cliath',
    'fear_manach' => 'Fear Manach',
    'gaillimh' => 'Gaillimh',
    'ciarrai' => 'Ciarraí',
    'cill_dara' => 'Cill Dara',
    'cill_chainnigh' => 'Cill Chainnigh',
    'laois' => 'Laois',
    'liatroim' => 'Liatroim',
    'luimneach' => 'Luimneach',
    'an_longfort' => 'An Longfort',
    'lu' => 'Lú',
    'maigh_eo' => 'Maigh Eo',
    'an_mhi' => 'An Mhí',
    'muineachan' => 'Muineachán',
    'uibh_fhaili' => 'Uíbh Fhailí',
    'ros_comain' => 'Ros Comáin',
    'sligeach' => 'Sligeach',
    'tiobraid_arann' => 'Tiobraid Árann',
    'tir_eoghain' => 'Tír Eoghain',
    'port_lairge' => 'Port Láirge',
    'an_iarmhi' => 'An Iarmhí',
    'loch_garman' => 'Loch Garman',
    'cill_mhantain' => 'Cill Mhantáin'
  );

  /* List of all Irish Counties in an basic array with fada's. */
  $counties_list("Aontroim","Ard Mhacha","Ceatharlach","An Cabhán","An Clár","Corcaigh","Doire","Dún na nGall","An Dún","Baile Átha Cliath","Fear Manach","Gaillimh","Ciarraí","Cill Dara","Cill Chainnigh","Laois","Liatroim","Luimneach","An Longfort","Lú","Maigh Eo","An Mhí","Muineachán","Uíbh Fhailí","Ros Comáin","Sligeach","Tiobraid Árann","Tír Eoghain","Port Láirge","An Iarmhí","Loch Garman","Cill Mhantáin");

  /* List of all Irish Counties in an basic array without fada's. */
  $counties_list("Aontroim","Ard Mhacha","Ceatharlach","An Cabhan","An Clar","Corcaigh","Doire","Dun na nGall","An Dun","Baile Atha Cliath","Fear Manach","Gaillimh","Ciarrai","Cill Dara","Cill Chainnigh","Laois","Liatroim","Luimneach","An Longfort","Lu","Maigh Eo","An Mhí","Muineachán","Uibh Fhaili","Ros Comain","Sligeach","Tiobraid Arann","Tir Eoghain","Port Lairge","An Iarmhi","Loch Garman","Cill Mhantain");

?>
