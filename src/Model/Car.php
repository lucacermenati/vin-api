<?php
namespace src\Model;

class Car
{
    private $datumEersteAfgifteNederlandDt;
    private $merk;
    private $handelsbenaming;
    private $fuels;
    
    public function __construct()
    {
        $this->fuels = [];
    }
    
    public function getDatumEersteAfgifteNederlandDt()
    {
        return $this->datumEersteAfgifteNederlandDt;
    }
    
    public function setDatumEersteAfgifteNederlandDt($datumEersteAfgifteNederlandDt)
    {
        $this->datumEersteAfgifteNederlandDt = $datumEersteAfgifteNederlandDt;
    }
    
    public function getMerk()
    {
        return $this->merk;
    }
    
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }
    
    public function getHandelsbenaming()
    {
        return $this->handelsbenaming;
    }
    
    public function setHandelsbenaming($handelsbenaming)
    {
        $this->handelsbenaming = $handelsbenaming;
    }
    
    public function getFuels()
    {
        return $this->fuels;
    }
    
    public function setFuels($fuels)
    {
        $this->fuels = $fuels;
    }
    
    public function addFuel($fuel) 
    {
        $this->fuels [] = $fuel;
    }
}

