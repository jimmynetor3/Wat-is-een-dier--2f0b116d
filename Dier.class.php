<?php

class Dier
{
    public $dier;

    public function eet()
    {
        echo($this->dier . " eet" . PHP_EOL);
    }

    public function slaap()
    {
        echo($this->dier . " slaapt" . PHP_EOL);
    }
}
