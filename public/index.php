<?php
    function array_seed()
    {
        $array = [];
        for ($i = 0; $i < 1000; $i++) {
            $array[$i] = rand(1, 1000);
        }
        for ($i = 0; $i < 1000; $i++) {
            echo($i . " : ");
            var_dump($array[$i]);
        }
    }
    //array_seed()
?>

