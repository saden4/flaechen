<?php

namespace saden4\Flaechen;
class Gesamt
{
    private array $flaechen = [];

    public function addFlaeche(Rechteck $r):void
    {
        $this->flaechen[] = $r;

    }
}