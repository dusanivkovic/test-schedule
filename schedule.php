<?php
require 'functions.php';

If (!file_exists('schedule.json'))
{
    $schedules = [];
}else
{
    $json = file_get_contents('schedule.json');
    $schedules = json_decode($json, true);
    if (isset($_POST['submit']))
    {
        $nastavnik = sanitizeAndTrim($_POST['nastavnik']) ?? false;
        $predmet = sanitizeAndTrim($_POST['predmet']);
        $sedmica = $_POST['sedmica']; 
        $razred = $_POST['razred'];
        $provjera = $_POST['provjera'];
        $odjeljenje = $_POST['odjeljenje[]'];
        if ($nastavnik && $predmet != 'Предмет' && $razred != 'Разред')
        {
            $schedules[] = [
                'nastavnik' => $nastavnik,
                'predmet'   => $predmet, 
                'sedmica'   => date("d-m-Y", strtotime($sedmica)),
                'razred'    => $razred,
                'provjera'  => $provjera,
                'odjeljenje'=> $odjeljenje
            ];
        }else
        {
            header('location: index.php?error=empty');
        }
    }
}
file_put_contents('schedule.json', json_encode($schedules, JSON_PRETTY_PRINT));
dump($schedules);