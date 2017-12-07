<?php
date_default_timezone_set('Europe/Paris');

$date = "2014-02-01";
// ETAPE 1
//$new_date = date('Y-m-d', strtotime($date . " +3 months +2 days"));
//echo date('d/m/Y', strtotime($new_date)); // 03/05/2014

// ETAPE 2 - avec des fonctions
// mais notre site risque d'être un catalogue de milliers et de milliers de fonctions
$date = add_days($date, 2)
$date = add_months($date, 3)
echo format_date($date, 'd/m/Y'); // 03/05/2014

// ETAPE 3 - avec les objets
$date = new MaDate("2014-02-01");
$date->addDays(2);
$date->addMonths(3);
$date->format('d/m/Y');