<?php

class Artikl
{
    protected $naziv;
    protected $cijena;

    public function __construct($a, $b)
    {
        $this->naziv = $a;
        $this->cijena = $b;
    }

    public function getNaziv()
    {
        return $this->naziv;
    }


    public function getCijena()
    {
        return $this->cijena;
    }

}




?>