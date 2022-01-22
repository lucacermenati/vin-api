<?php
namespace src\Model;

class Fuel
{
    private $brandstof_omschrijving;
    
    public function getBrandstof_omschrijving($brandstof_omschrijving)
    {
        return $this->brandstof_omschrijving;
    }
    
    public function setBrandstof_omschrijving($brandstof_omschrijving)
    {
        $this->brandstof_omschrijving = $brandstof_omschrijving;
    }
}

