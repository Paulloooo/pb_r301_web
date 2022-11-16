<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP TP02 : get informations of a file</title>
</head>
<body>
<h1>Get file name, class and method you are currently use</h1>
<h3><a href="http://php.r301.biarneix.com"> Return to home </a></h3>
<?php
$fileInfo = new FileInformation();
$fileInfo->getInformationOfFile();
class FileInformation
{
    function getCharacterInString(string $str, string $character){
        $pos = 0;
        for ($posInStr=0;$posInStr<strlen($str);$posInStr++){
            if($str[$posInStr]==$character){
                $pos = $posInStr;
            }
        }
        return($pos+1);
}
    function getInformationOfFile(){
        $fileInformation = [];
        $filename = substr(__FILE__,$this->getCharacterInString(__FILE__,chr(92)));
        $classMethod = substr(__METHOD__,$this->getCharacterInString(__METHOD__,":"));
        array_push($fileInformation,$filename,__CLASS__,$classMethod);
        echo $fileInformation[0]."</br>";
        echo $fileInformation[1]."</br>";
        echo $fileInformation[2]."()";
    }
}