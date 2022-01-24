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
    
    public function getDatumEersteAfgifteNederlandDt($datumEersteAfgifteNederlandDt)
    {
        return $this->$datumEersteAfgifteNederlandDt;
    }
    
    public function setDatumEersteAfgifteNederlandDt($datumEersteAfgifteNederlandDt)
    {
        $this->datumEersteAfgifteNederlandDt = $datumEersteAfgifteNederlandDt;
    }
    
    public function getMerk($merk)
    {
        return $this->merk;
    }
    
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }
    
    public function getHandelsbenaming($handelsbenaming)
    {
        return $this->handelsbenaming;
    }
    
    public function setHandelsbenaming($handelsbenaming)
    {
        $this->handelsbenaming = $handelsbenaming;
    }
    
    public function addFuel($fuel) 
    {
        $this->fuels [] = $fuel;
    }
}

