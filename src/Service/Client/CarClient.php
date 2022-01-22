<?php
namespace App\Service\Client;

class CarClient extends OverheidClient
{
    public function getInfo($plate)
    {
        return $this->request("GET", $plate);
    }
}

