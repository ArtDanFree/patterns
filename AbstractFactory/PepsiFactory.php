<?php
namespace AbstractFactory;

use AbstractFactory\AbstractBottle\PepsiBottle;
use AbstractFactory\AbstractWater\PepsiWater;


class PepsiFactory extends AbstractFactory
{
    public function bottle()
    {
        return new PepsiBottle();
    }

    public function watter()
    {
        return new PepsiWater();
    }
}