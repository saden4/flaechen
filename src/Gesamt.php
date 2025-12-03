<?php

namespace saden4\Flaechen;
class Gesamt
{
    private array $flaechen = [];

    public function addFlaeche(Rechteck $r):void
    {
        $this->flaechen[] = $r;

    }

    public function getFlaeche():float
    {
        $sum = 0;

        foreach ($this->flaechen as $flaeche)
        {
           $sum = $sum + $flaeche->getFlaeche();
        }

        return $sum;
    }

}