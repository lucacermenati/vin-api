<?php
namespace src\Model;

class Car
{
    private $datum_eerste_afgifte_nederland_dt;
    private $merk;
    private $handelsbenaming;
    private $fuels;
    
    public function __construct()
    {
        $this->fuels = [];
    }
    
    public function getDatum_eerste_afgifte_nederland_dt($datum_eerste_afgifte_nederland_dt)
    {
        return $this->datum_eerste_afgifte_nederland_dt;
    }
    
    public function setDatum_eerste_afgifte_nederland_dt($datum_eerste_afgifte_nederland_dt)
    {
        $this->datum_eerste_afgifte_nederland_dt = $datum_eerste_afgifte_nederland_dt;
    }
    
    public function getMerk($merk)
    {
        return $this->merk;
    }
    
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }
    
    public function getHandelsbenaming($merk)
    {
        return $this->merk;
    }
    
    public function setHandelsbenaming($merk)
    {
        $this->merk = $merk;
    }
    
    public function addFuel($fuel) 
    {
        $this->fuels [] = $fuel;
    }
}

