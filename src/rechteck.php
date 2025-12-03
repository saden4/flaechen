<?php

namespace Saden4\Flaechen;
class Rechteck

{

    private float $breite;
    private float $hoehe;


    public function __construct(float $breite, float $hoehe)
    {

        $this->breite = $breite;

        $this->hoehe = $hoehe;

    }

    public function getFlaeche(): float
    {

        return $this->breite * $this->hoehe;

    }

}

