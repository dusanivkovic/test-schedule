<?php
function dump ($input)
{
   echo '<pre>';
   var_dump($input);
   echo '</pre>';
}

function sanitizeAndTrim ($input) 
{
    $userInput = htmlspecialchars($input, ENT_QUOTES);
    
    return trim($userInput);
}

// function validateFile ($file)
// {
//     if (file_exists($file))
//     {
//         $json = file_get_contents($file);
//         $schedule = json_decode($json, true);
//     }else
//     {
//         $schedule = [];
//     }
//     return $schedule;
// }