<?php
require 'functions.php';
$nastavnik = $_POST['nastavnik'];
$predmet = $_POST['predmet'];
$sedmica = $_POST['sedmica'];
$razred = $_POST['razred'];
$provjera = $_POST['provjera'];
$odjeljenje = $_POST['odjeljenje'];

dump($odjeljenje);

If (file_exists('schedule.json'))
{
    $json = file_get_contents('schedule.json');
    $schedules = json_decode($json, true);
    $schedules[] = [
        'nastavnik' => $nastavnik,
        'predmet'   => $predmet, 
        'sedmica'   => $sedmica,
        'razred'    => $razred,
        'provjera'  => $provjera,
        'odjeljenje'=> $odjeljenje
    ];
}else
{
    $schedules = [];
}
file_put_contents('schedule.json', json_encode($schedules, JSON_PRETTY_PRINT));
dump($schedules);