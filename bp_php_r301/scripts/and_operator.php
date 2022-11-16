<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP TP02 : operators demonstration</title>
</head>
<body>
<h1>Let's demonstrate the and operator (&)</h1>
<h3><a href="http://php.r301.biarneix.com/scripts/operators.php"> Return to operators </a></h3>
<h3><a href="http://php.r301.biarneix.com/"> Return to home </a></h3>
<h3>Enter 2 comparison. If the first and second are true , it will print that it is true or number 1.
    and if one of them is false, it will print false or 0. You can only use elementary operators.</h3>


<!-- form to return -->
<form>
    <textarea name="first" id="first"></textarea>
    <textarea name="operator" id="operator"></textarea>
    <textarea name="second" id="second"></textarea>
    and
    <textarea name="third" id="third"></textarea>
    <textarea name="scnd_operator" id="scnd_operator"></textarea>
    <textarea name="fourth" id="fourth"></textarea>
    </br>
    <input type = 'checkbox' name = 'type_of_return'> Type of return : boolean </input>
    </br>
    <input type=submit name="first_input" id="first_input" value="Compare"/>
</form>


<?php
//definition des variables dont on va avoir besoin
$first_number = 0;
$operator = "";
$second_number = 0;
$third_number = 0;
$scnd_operator = "";
$fourth_number = 0;

//verifie si l'utilisateur a rentre une valeur dans le textarea
if (isset($_GET['first'])&isset($_GET['operator'])&isset($_GET['second'])&isset($_GET['third'])&isset($_GET['scnd_operator'])&isset($_GET['fourth'])){
    $first_number = $_GET['first'];
    $operator = $_GET['operator'];
    $second_number = $_GET['second'];
    $third_number = $_GET['third'];
    $scnd_operator= $_GET['scnd_operator'];
    $fourth_number = $_GET['fourth'];

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

echo("Result : ");
if(!empty($_GET['type_of_return'])){
    var_dump(comparison($operator,$first_number,$second_number) && comparison($scnd_operator,$first_number,$scnd_operator));
}else {
    echo(comparison($operator,$first_number,$second_number) & comparison($scnd_operator,$first_number,$scnd_operator));
}
echo("</br>");
