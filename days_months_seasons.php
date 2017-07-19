<?php

/** This associative array displays the days of the week in Irish and stores the keys in
    Irish also.
*/
$days['irish_set'] = array(
  'de_luan' => 'Dé Luain',
  'de_mairt' => 'Dé Máirt',
  'de_ceadaoin' => 'Dé Céadaoin',
  'de_deardaoin' => 'Déardaoin',
  'de_haoine' => 'Dé hAoine',
  'de_sathairn' => 'Dé Sathairn',
  'de_domhnaigh' => 'Dé Domhnaigh'
);

/** This associative array displays the days of the week in Irish but stores the keys in
    English.
*/
$days['english_set'] = array(
  'monday' => 'Dé Luain',
  'tuesday' => 'Dé Máirt',
  'wednesday' => 'Dé Céadaoin',
  'thursday' => 'Déardaoin',
  'friday' => 'Dé hAoine',
  'saturday' => 'Dé Sathairn',
  'sunday' => 'Dé Domhnaigh'
);

/** This associative array displays the months of the year in Irish and stores the keys in
    Irish also.
*/
$months['irish_set'] = array(
  'eanair' => 'Eanáir',
  'feabhra' => 'Feabhra',
  'Marta' => 'Márta',
  'aibrean' => 'Aibreán',
  'bealtaine' => 'Bealtaine',
  'meitheamh' => 'Meitheamh',
  'iuil' => 'Iúil',
  'lunasa' => 'Lúnasa',
  'mean_fomhair' => 'Meán Fómhair',
  'deireadh_fomhair' => 'Deireadh Fómhair',
  'samhain' => 'Samhain',
  'nollaig' => 'Nollaig'
);

/** This associative array displays the months of the year in Irish but stores the keys in
    English.
*/
$months['english_set'] = array(
  'january' => 'Eanáir',
  'february' => 'Feabhra',
  'march' => 'Márta',
  'april' => 'Aibreán',
  'may' => 'Bealtaine',
  'june' => 'Meitheamh',
  'july' => 'Iúil',
  'august' => 'Lúnasa',
  'september' => 'Meán Fómhair',
  'october' => 'Deireadh Fómhair',
  'november' => 'Samhain',
  'december' => 'Nollaig'
);

/** This associative array displays the seasons of the year in Irish and stores the keys in
    Irish also.
*/
$seasons['irish_set'] = array(
  'geimhreadh' => 'Geimhreadh',
  'earrach' => 'Earrach',
  'samhradh' => 'Samhradh',
  'fomhar' => 'Fómhar'
);

/** This associative array displays the seasons of the year in Irish but stores the keys in
    English.
*/
$seasons['english_set'] = array(
  'winter' => 'Geimhreadh',
  'spring' => 'Earrach',
  'summer' => 'Samhradh',
  'autumn' => 'Fómhar'
);

/* A basic array containing the days of the week in Irish. */
$days("Dé Luain","Dé Máirt","Dé Céadaoin","Déardaoin","Dé hAoine","Dé Sathairn","Dé Domhnaigh");

/* A basic array containing the months of the year in Irish. */
$months("Eanáir","Feabhra","Márta","Aibreán","Bealtaine","Meitheamh","Iúil","Lúnasa","Meán Fómhair","Deireadh Fómhair","Samhain","Nollaig");

/* A basic array containing the seasons of the year in Irish. */
$seasons("Geimhreadh","Earrach","Samhradh","Fómhar");
