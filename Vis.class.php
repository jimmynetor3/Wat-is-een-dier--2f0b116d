<?php

require_once "Dier.class.php";

class Vis extends Dier
{
    public function __construct()
    {
        $this->dier = 'vis';
    }

    public function praat()
    {
        echo("blub blub");
    }
}