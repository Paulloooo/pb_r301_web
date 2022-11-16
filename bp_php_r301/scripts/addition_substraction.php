<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP TP02 : addition and subtraction</title>
</head>
<body>
<h3><a href="http://php.r301.biarneix.com"> Return to home </a></h3>
<form>
    <input type= "submit" name="number_operation" value="++"/>
    <input type= "submit" name="number_operation" value="--"/>
</form>
<?php
    $number_operation = "++";
    $file_number = fopen("number_for_operator.txt", "r");
    $number = fread($file_number,filesize("number_for_operator.txt"));
    fclose($file_number);

    if(isset($_GET['number_operation'])){
        $number_operation = $_GET['number_operation'];
        if ($number_operation == '++') {
            $number++;
        }else if ($number_operation== '--') {
            $number--;
        }
    }

    echo("Number : ".$number);
    $file_number = fopen("number_for_operator.txt", "w");
    fwrite($file_number, ($number));
    fclose($file_number);

?>




