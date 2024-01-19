<?php
// header('Cache-Control:no-cache, no-store');
require 'functions.php';
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
$form->addElement(new TextInput('nastavnik', 'Ime i prezime', 'nastavnik', 'Ime i prezime'));
$form->addElement(new Select(['Предмет', 'Biologiija', 'Informatika', 'engleski jezik'],'predmet', 'Predmet', 'predmet'));
$form->addElement(new Radio('provjera', 'Pismeni', 'pismeni', 'pismeni', 'pismeni', 'col-2'));
$form->addElement(new Radio('provjera', 'Kontrolni', 'kontrolni', 'kontrolni', 'kontrolni', 'col-2'));
$form->addElement(new Select($razred, 'razred', 'Razred', 'razred', 'col-md-2'));
$i = 1;
while ($i <= 5)
{
    $form->addElement(new Checkbox('odjeljenje[]', '', '', '', $i, 'col-2'));
    $i++;
}
$form->addElement(new DateInput('sedmica', 'Sedmica', 'sedmica'));
$form->addElement(new Button('Proslijedi'));
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
    <span class="navbar-brand mb-0 h1">Navbar</span>
  </div>
</nav>
<main class="container">
    <?php
    echo $form->render() . '<br>';
    dump($form);
    ?>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<!-- <form class="row g-3" method="post" action="schedule.php"> -->
    <!-- <div class="col-md-6">
        <label for="nastavnik" class="form-label">Ime i prezime</label>
        <input type="text" name="nastavnik" id="nastavnik" class="form-select" placeholder="Ime i prezime">
    </div>
    <div class="col-md-4">
        <label for="predmet" class="form-label">Predmet</label>
        <select id="predmet" class="form-select" name="predmet">
            <option selected>Predmet...</option>
            <option value="informatika">Informatika</option>
            <option value="engleski">Engleski jezik</option>
            <option value="biologija">Biologija</option>
        </select>
    </div>
    <div class="col-md-2">
        <div class="form-check">
            <h6>Vrsta provjere</h6>
            <div>
                <label class="form-check-label" for="pismeni">Pismeni</label>    
                <input class="form-check-input" type="checkbox" id="pismeni" name="provjera" value="pismeni">
            </div>
            <div>
                <label class="form-check-label" for="kontrolni">Kontrolni</label>    
                <input class="form-check-input" type="checkbox" id="kontrolni" name="provjera" value="kontrolni">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <label for="sedmica" class="form-label">Datum</label>
        <input type="date" class="form-control" id="sedmica" name="sedmica">
    </div>
    <div class="col-md-4">
        <label for="razred" class="form-label">Razred</label>
        <select id="razred" class="form-select" name="razred">
        <option selected>Razred...</option>
        <option>I</option>
        <option>II</option>
        <option>IV</option>
        </select>
    </div>
    <div class="col-md-4">
        <div class="form-check">
            <h6>Odjeljenja</h6>
            <div class="row">
                <div class="col">
                    <label class="form-check-label" for="odjeljenje1">1</label>    
                    <input class="form-check-input" type="checkbox" id="odjeljenje1" name="odjeljenje[]" value="1">
                </div>
                <div class="col">
                    <label class="form-check-label" for="odjeljenje2">2</label>   
                    <input class="form-check-input" type="checkbox" id="odjeljenje2" name="odjeljenje[]" value="2">
                </div>
                <div class="col">
                    <label class="form-check-label" for="odjeljenje3">3</label>   
                    <input class="form-check-input" type="checkbox" id="odjeljenje3" name="odjeljenje[]" value="3">
                </div>
                <div class="col">
                    <label class="form-check-label" for="odjeljenje4">4</label>    
                    <input class="form-check-input" type="checkbox" id="odjeljenje4" name="odjeljenje[]" value="4">
                </div>
                <div class="col">
                    <label class="form-check-label" for="odjeljenje5">5</label>    
                    <input class="form-check-input" type="checkbox" id="odjeljenje5" name="odjeljenje[]" value="5">
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
</form> -->