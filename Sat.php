<?php

class Sat
{
    public function Vrijeme()
    {
        date_default_timezone_set('Europe/Zagreb');
        $time = date("H:i:s");
        return $time;
    }
}


?>