<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP TP02 : constructs demonstration</title>
</head>
<body>
<h1>Let's demonstrate constructs !</h1>
<h3><a href="http://php.r301.biarneix.com"> Return to home </a></h3>
<h3>Enter the constructs you want to test.</h3>


<!-- form to return -->
<form>
    <textarea name="construct" id="construct"></textarea>
    </br>
    If you want to use the construct for or while, enter a value :</br>
    <textarea name="value" id="value"></textarea>
    <input type=submit name="first_input" id="first_input" value="Compare"/>
</form>


<h2>Resultat : </h2>

<?php
//definition des variables dont on va avoir besoin
$construct = "";
$value = 0;
$smiley = ":(";


//verifie si l'utilisateur a rentre une valeur dans le textarea
if (isset($_GET['construct'])&isset($_GET['value'])){
    $construct = $_GET['construct'];
    $value = $_GET['value'];
}
if(isset($_GET['smiley'])){
    $smiley = ":)";
}

//renvoi des varables precedentes que l'on va utiliser
echo("<h3>Construct $construct</h3>");
echo("Smiley -> ".$smiley."</br>"."</br>");

//fonction qui renvoie la comparaison
function construct($construct, $value)
{
    switch ($construct) {
        case "foreach" :
            constructForeach();
            break;
        case "for" :
            constructFor($value);
            break;
        case "while" :
            constructWhile($value);
            break;
        case "if" :
            constructIf();
            break;
        case "?" :
            constructTernary();
            break;
    }
}

function constructTernary()
{
    echo("Example of ? :"."</br>");
    echo("</br>");
    echo("With the construct ?, we return > if 3 is superior to 4, or < if 3 is inferior to 4"."</br>");
    echo("Structure of construct : (3>4)?'>':'<'</br>");
    echo((3>4)?">":"<");
}

construct($construct,$value);

function constructWhile($value_while)
{
    echo("Example of while :"."</br>");
    echo("</br>");
    echo("With the construct while, we print numbers of $value_while to 0"."</br>");

    do{
        $value_while--;
        echo($value_while."</br>");
    }while ($value_while!=0);
}

function constructIf()
{
    echo("Example of if utilisation :"."</br>");
    echo("</br>");
    echo("While you dont push the button, the smiley is angry. But if you push the button : "."</br>");

}


function constructFor($value_for)
{
    echo("Example of for :"."</br>");
    echo("</br>");
    echo("With the construct for, we print the sentence 'We love R3.01 !' the number of times you write before : "."</br>");
    for ($i = 1; $i <= $value_for; $i++){
        echo($i." "."We love R3.01 !"."</br>");
    }
}

function constructForeach()
{
    $table = [1,2,3];
    echo("Example of foreach with a table of three elements :"."</br>");
    var_dump($table);
    echo("</br>");
    echo("With the construct foreach, we browse the table : "."</br>");
    foreach ($table as $i){
        echo($i." ");
    }

}


?>