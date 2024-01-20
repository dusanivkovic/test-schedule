<?php
// header('Cache-Control:no-cache, no-store');
require 'functions.php';
require_once __DIR__ . '/predmet.php';
require_once __DIR__ . '/classes/htmlElement.php';
require_once __DIR__ . '/classes/Form.php';
require_once __DIR__ . '/classes/BaseInput.php';
require_once __DIR__ . '/classes/TextInput.php';
require_once __DIR__ . '/classes/Checkbox.php';
require_once __DIR__ . '/classes/Radio.php';
require_once __DIR__ . '/classes/Button.php';
require_once __DIR__ . '/classes/BaseSelect.php';
require_once __DIR__ . '/classes/Select.php';
require_once __DIR__ . '/classes/DateInput.php';

$razred = ['Разред', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX'];
$form = new Form ('schedule.php');
$form->addElement(new TextInput('nastavnik', 'Име и презиме', 'nastavnik', 'Наставник'));
$form->addElement(new Select($predmet,'predmet', 'Предмет', 'predmet'));
$form->addElement(new Radio('provjera', 'Писмени', 'pismeni', 'pismeni', 'pismeni', 'col-2'));
$form->addElement(new Radio('provjera', 'Контролни', 'kontrolni', 'kontrolni', 'kontrolni', 'col-2'));
$form->addElement(new Select($razred, 'razred', 'Разред', 'razred', 'col-md-2'));
$i = 1;
while ($i <= 5)
{
    $form->addElement(new Checkbox('odjeljenje[]', "$i", "odjeljenje[$i]", '', $i, 'col-2', "odjeljenje[$i]"));
    $i++;
}
$form->addElement(new DateInput('sedmica', 'Седмица', 'sedmica'));
$form->addElement(new Button('Прослиједи'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"><a class="navbar-brand"href="index.php">Form</a></span>
  </div>
</nav>
<main class="container">
    <?php
    echo $form->render() . '<br>';
    ?>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./assets/js/script.js"></script>
</body>
</html>
