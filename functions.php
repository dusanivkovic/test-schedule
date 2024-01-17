<?php
function dump ($input)
{
   echo '<pre>';
   var_dump($input);
   echo '</pre>';
}

function validateFile ($file)
{
    if (file_exists($file))
    {
        $json = file_get_contents($file);
        $schedule = json_decode($json, true);
    }else
    {
        $schedule = [];
        // header('location: index.php?error=entry');
    }
    return $schedule;
}