<?php

include("Time.php");

class HrTime extends Time
{
    public function show()
    {
        parent::show();
        $time = date("H:i:s");
        return $time;
    }

    public function Split()
    {
        $time = date("\H\=H, \M\=i");
        return $time;
    }
}


?>