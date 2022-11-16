<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP TP02 : operators demonstration</title>
</head>
<body>
<h1>Let's demonstrate the ternary operator (?)</h1>
<h3><a href="http://php.r301.biarneix.com/scripts/operators.php"> Return to operators </a></h3>
<h3><a href="http://php.r301.biarneix.com/"> Return to home </a></h3>
<h3>Enter elements to compare them. If the first is true, it will print the first statement
    and if the first is false, it will print the second statement. You can only use elementary operators (==, >, <)</h3>


<!-- form to return -->
<form>
    <textarea name="first" id="first"></textarea>
    <textarea name="operator" id="operator"></textarea>
    <textarea name="second" id="second"></textarea>
    <textarea name="second_operation" id="second_operation"></textarea>
    <textarea name="third_operation" id="third_operation"></textarea>
    </br>
    <input type=submit name="first_input" id="first_input" value="Compare"/>
</form>


<?php
//definition des variables dont on va avoir besoin
$first_number = 0;
$operator = "";
$second_number = 0;
$second_statement = "";
$third_statement = "";

//verifie si l'utilisateur a rentre une valeur dans le textarea
if (isset($_GET['first'])&isset($_GET['operator'])&isset($_GET['second'])&isset($_GET['second_operation'])&isset($_GET['third_operation'])){
    $first_number = $_GET['first'];
    $operator = $_GET['operator'];
    $second_number = $_GET['second'];
    $second_statement = $_GET['second_operation'];
    $third_statement = $_GET['third_operation'];
}
function comparison($operator, $first_number, $second_number)
{
    switch ($operator) {
        case "==" :
            return (comparatorDoubleEqual($first_number, $second_number));
            break;
        case "<":
            return (comparatorInf($first_number, $second_number));
            break;
        case ">" :
            return (comparatorSup($first_number, $second_number));
            break;
    }
}
    //demonstrates the operator ==
    function comparatorDoubleEqual($first_number,$second_number) :bool
    {
        if (intval($first_number) == intval($second_number)) {
            return true;
        }else{
            return false;
        }
    }

    function comparatorSup($first_number, $second_number): bool
    {
        if (intval($first_number) > intval($second_number)) {
            return true;
        }else {
            return false;
        }
    }

    function comparatorInf($first_number, $second_number): bool
    {
        if (intval($first_number) < intval($second_number)) {
            return true;
        }else {
            return false;
        }
    }

echo (comparison($operator,$first_number,$second_number)) ? ($second_statement) : ($third_statement);