<?php

class dealercar
{
    public $namecar;
    public $capacity;

    function buycar()
    {
        echo "mobil tersedia, silahkan beli.";
    }
    function typecar()
    {
        echo "tersedia pilihan tipe kapasitas mobil.";
    }
}
$buy = new dealercar();
$buy->buycar();
echo "<br>";
$buy->namecar = "honda civic 2023";
echo "<br>";
$buy->capacity = 2;
echo "<br>";
echo "berhasil membeli" .$buy->namecar . ' dengan kapasitas ' . $buy->capacity;

echo "<br>";