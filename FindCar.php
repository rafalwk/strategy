<?php

declare(strict_types=1);

class FindCar
{
    private ViewCarsInterface $viewCars;

    public function __construct(
        ViewCarsInterface $viewCars
    ){
        $this->viewCars = $viewCars;
    }

    public function FindCar()
    {

    }

    public function setViewCars($bodyType, $fuelType){
        $this->viewCars->viewCars($bodyType, $fuelType);
    }
}
