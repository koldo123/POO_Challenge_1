<?php

class Car
{
    // Variables
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    ////////// CONSTRUCTEUR
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    ////////// METHODES

    // Function forward()
    public function forward(): string
    {
        $this->currentSpeed = 1;
        return "Go !  <br>";
    }

    // Function start()
    public function start(): string
    {
        $sentence = "";
        while($this->currentSpeed < 10) {
            $this->currentSpeed++;
            $sentence .= "Faster! <br>";
        }
        $sentence .= " $this->currentSpeed km/h <br>";
        return $sentence;
    }

    public function brake(): string
    {
        $sentence = '';
        while($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= 'Brake!  <br>';
        }
        $sentence .= "I'm stopped !  <br>";
        return $sentence;
    }

    ////////// GETTERS
    public function getNbWheels(): int 
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int 
    {
        return $this->currentSpeed;
    }

    public function getColor(): string 
    {
        return $this->color;
    }

    public function getNbSeats(): int 
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string 
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int 
    {
        return $this->energyLevel;
    }
}