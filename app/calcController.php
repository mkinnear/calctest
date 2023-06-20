<?php

use App\Calculator;

    require_once "./Calculator.php";
    $calc = new Calculator();
    $res = $calc->add($_POST['number1'], $_POST['number2']);
    echo "$res";
?>