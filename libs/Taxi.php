<?php

namespace App\Travel\Types;
use App\Travel\Travel;

class Taxi extends Travel
{
    public function __construct()
    {
        $this->price = 15;
    }

    public function getAmount($distance)
    {
        return $distance * $this->price;
    }
}
