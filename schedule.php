<?php
require 'functions.php';
const NAME_REQUIRED = 'Унеси име и презиме';
$errors = [];

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
        $_SESSION['nastavnik'] = $nastavnik;
        $predmet = sanitizeAndTrim($_POST['predmet']);
        $sedmica = $_POST['sedmica']; 
        $razred = $_POST['razred'];
        $provjera = ($_POST['provjera'] == 'pismeni') ? 'Писмени' : 'Контролни';
        $odjeljenje = $_POST['odjeljenje'];
        if (!$nastavnik)
        {
            header('location: index.php?error=nastavnik');
        }elseif ($predmet == 'Предмет')
        {
            header('location: index.php?error=predmet');
        }elseif ($razred == 'Разред')
        {
            header('location: index.php?error=razred');
        }else
        {
            $schedules[] = [
                'nastavnik' => $nastavnik,
                'predmet'   => $predmet, 
                'sedmica'   => date("d-m-Y", strtotime($sedmica)),
                'razred'    => $razred,
                'provjera'  => $provjera,
                'odjeljenje'=> $odjeljenje
            ];
        }
    }
}
file_put_contents('schedule.json', json_encode($schedules, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
dump($schedules);