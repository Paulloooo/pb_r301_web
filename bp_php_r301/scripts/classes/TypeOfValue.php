<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP TP02 : get type of unknown element (gettype())</title>
</head>
<body>
<h1>Get type</h1>
<h3><a href="http://php.r301.biarneix.com"> Return to home </a></h3>
<h3>Select a value</h3>

<form>
    <label for="int">2022</label><input type="radio" id="int" name="type" value=2022>
    <label for="bool">true</label><input type="radio" id="bool" name="type" value=true>
    <label for="str">I love R301 ! </label><input type="radio" id="str" name="type" value="I love R301 !">
    </br>
    <input type=submit name="first_input" id="first_input" value="Get type"/>
</form>
<?php

if(isset($_GET['first_input'])){
    $value = $_GET['type'];
    switch($value){
        case "2022":
            $value = 2022;
            break;
        case "true":
            $value = true;
            break;
    }
    $typeOfValue = new TypeOfValue();
    echo ("The type of the variable is :".$typeOfValue->typeOfTheVariable($value));

}
class TypeOfValue
{
    function typeOfTheVariable($var): string
    {
        return gettype($var);
    }
}