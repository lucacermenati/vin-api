<?php
namespace src\Model;

class Fuel
{
    private $brandstofOmschrijving;
    
    public function getBrandstofOmschrijving()
    {
        return $this->brandstofOmschrijving;
    }
    
    public function setBrandstofOmschrijving($brandstofOmschrijving)
    {
        $this->brandstofOmschrijving = $brandstofOmschrijving;
    }
}

