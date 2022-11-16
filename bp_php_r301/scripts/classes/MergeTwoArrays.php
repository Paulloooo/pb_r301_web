<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP TP02 : merge two arrays</title>
</head>
<body>
<h1>Merge 2 arrays</h1>
<h3><a href="http://php.r301.biarneix.com"> Return to home </a></h3>
<h3>Enter two arrays to merge them (values spaces between them).</h3>

<form>
    <textarea name="first_array" id="first_array"></textarea>
    <textarea name="second_array" id="second_array"></textarea>
    </br>
    <input type=submit name="first_input" id="first_input" value="Compare"/>
</form>
<?php


if (isset($_GET['first_array'])&isset($_GET['second_array'])){
    $first_array = $_GET['first_array'];
    $second_array = $_GET['second_array'];
    $mergeArrays = new MergeTwoArrays();
    $mergeArrays->mergeTwoArraysFromParameters(explode(" ",$first_array),explode(" ",$second_array));
}


class MergeTwoArrays
{
    function mergeTwoArraysFromParameters(array $array1, array $array2){
        echo("Content of the first array : ".implode(" ",$array1)."</br>");
        echo("Content of the second array : ".implode(" ",$array2)."</br>");
        $arrayresult = array_merge($array1,$array2);
        echo("</br>"."Content of the array : ".implode(" ",$arrayresult)."</br>");
        var_dump($arrayresult);
    }
}