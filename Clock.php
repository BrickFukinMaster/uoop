<?php
include ("Sat.php");

class Clock extends Sat
{
    function Vrijeme()
    {
        parent::Vrijeme();
        $time = date("h:i:s");
        return $time;
    }

}


?>