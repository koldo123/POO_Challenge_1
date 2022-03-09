<?php

class Bycicle 
{
    private string $color;
    private int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels = 2;

    // function __construct permet d'initialiser les variables lors de l'instanciation
    // Un constructeur de fait jamais de return!
    public function __construct(string $color, int $currentSpeed)
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
    }


    // Getter and Setter for $color
    public function getColor(): string 
    {
        return $this->color;
    }

    public function setColor(string $color): void 
    {
        $this->color = $color;
    }

    // Getter and Setter for $currentSpeed
    public function getCurrentSpeed(): string
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void 
    {
        $this->currentSpeed = $currentSpeed;
    }

    // Function forward()
    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }
    // Function brake()
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

 
}


?>