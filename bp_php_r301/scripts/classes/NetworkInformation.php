<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP TP02 : get informations of the network</title>
</head>
<body>
<h1>Get host name, server and client IP, and request method.</h1>
<h3><a href="http://php.r301.biarneix.com"> Return to home </a></h3>
<?php
$netInfo = new NetworkInformation();
$netInfo->getInformationOfNetwork();
class NetworkInformation
{
    function getInformationOfNetwork(){
        $networkInfo = [];
        array_push($networkInfo,$_SERVER['SERVER_NAME'],$_SERVER['REMOTE_ADDR'],$_SERVER['REQUEST_METHOD']);
        echo $networkInfo[0]."</br>";
        echo $networkInfo[1]."</br>";
        echo $networkInfo[2]."()";
    }
}