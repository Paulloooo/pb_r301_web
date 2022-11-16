<?php
$testString = "pignouf";
$classTest = new TestClass();
echo("Variable string pour tester : ".$testString."</br>");
echo("Constant of the class TestClass : ".$classTest::CONSTANT_OF_CLASS."</br>");
echo("variable vartest of the class TestClass : ".$classTest->vartest."</br>");
echo("last character of the variable : ".$classTest->returnLastCharacterOfAString($testString));
class TestClass
{
    const CONSTANT_OF_CLASS = 'constant of TestClass';
    public $vartest = "variable of TestClass";

    function returnLastCharacterOfAString(string $string): string
    {
        return $string[strlen($string)-1];
    }
}