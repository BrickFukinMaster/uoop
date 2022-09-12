<?php

include ("Artikli.php");

$ArtikliMgr = Artikli::getInstance();

while(true)
{
    $ime = readline("Unesite artikl: ");
    $price = readline("Unesite cijenu: ");

    $ArtikliMgr->setArtikl(new Artikl($ime, $price));

    $check = readline("Zelite li unijeti jos proizvoda? (D/N) ");

    if ($check == "n" || $check == "N")
    {
        break;
    }
}

$ArtikliMgr->Ispis();




?>