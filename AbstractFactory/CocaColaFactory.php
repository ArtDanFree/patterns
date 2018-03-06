<?php

namespace AbstractFactory;

use AbstractFactory\AbstractBottle\CocaColaBottle;
use AbstractFactory\AbstractWater\CocaColaWater;


class CocaColaFactory extends AbstractFactory
{
    public function bottle()
    {
        return new CocaColaBottle();
    }
    public function watter()
    {
        return new CocaColaWater();
    }
}