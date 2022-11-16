<?php

class RamUsedScript
{
    function returnRamUsed(){
        echo memory_get_usage()/100000;
        echo memory_get_peak_usage()/100000;
    }
}