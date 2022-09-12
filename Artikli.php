<?php

include ("Artikl.php");

class Artikli
{
    protected $artikli = array();
    private static $instance;

    public function getArtikli()
    {
        return $this->artikli;
    }

    public function setArtikl($param)
    {
        $this->artikli[] = $param;
    }

    public function Ispis()
    {
        $a = $this->getArtikli();

        if(is_array($a))
        {
            foreach($a as $key => $artikl)
            {
                echo $artikl->getNaziv() . " - " . $artikl->getCijena();
                echo "\n";
            }
        }
    }

    public static function getInstance()
    {
        if(!isset(self::$instance))
        {
            self::$instance = new self;
        }

        return self::$instance;
    }
}


?>