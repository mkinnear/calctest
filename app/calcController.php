<?php

use App\Calculator;

    require_once "./Calculator.php";
    $calc = new App\Calculator;
    $res = $calc->add($_POST['number1'], $_POST['number2']);
?>