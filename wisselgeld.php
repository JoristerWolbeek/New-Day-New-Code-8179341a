<?php
$munten= array (
    "50 munt(en)"=>0,
    "20 munt(en)"=>0,
    "10 munt(en)"=>0,
    "5 munt(en)"=>0,
    "2 munt(en)"=>0,
    "1 munt(en)"=>0,
);
$bedrag = (int)$argv[1];
$restBedrag=$bedrag;

foreach($munten as $munt=>$hoeveelMunt) {
    $muntFix=intval($munt);
    while($restBedrag>=$muntFix) {
        $munten[$munt]++;
        $restBedrag -=$muntFix;
    }
}

foreach($munten as $munt=>$hoeveelMunt) {
    $muntFix=intval($munt);
    if($hoeveelMunt>=1) {
        echo($muntFix." munt(en) x ".$hoeveelMunt.PHP_EOL);
    }
}