<?php

class car
{
    public $namecar;
    public $typecar;
    public $colorcar;

    public function __construct($namecar, $typecar, $colorcar)
    {
        $this->namecar = $namecar;
        $this->typecar = $typecar;
        $this->colorcar = $colorcar;
    }
public function detailcar()
{
    echo "mobil saat ii adalah " . $this->namecar .
    "tipe mobilnya " . $this->typecar .
    "warna mobilnya adalah " . $this->colorcar
}
}