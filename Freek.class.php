<?php

require_once "Dier.class.php";
require_once "Vogel.class.php";
require_once "Vis.class.php";

class Freek
{

    public function brengNaarBed($dier)
    {
        echo "Freek brengt " . $dier->dier . " naar bed" . PHP_EOL;
        $dier->slaap();
    }

    public function geefEten($dier)
    {
        echo("freek geeft eten " . $dier->dier . PHP_EOL);
        $dier->eet();
    }
}
$vis = new Vis();
$vogel = new Vogel();
$freek = new Freek();

$freek->geefEten($vis);  // Print 'lekker!'
$freek->geefEten($vogel);  // Print 'lekker!'
$freek->brengNaarBed($vis);  // Print 'ZZZZzzzzz....'
$freek->brengNaarBed($vogel);
