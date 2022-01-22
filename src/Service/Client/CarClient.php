<?php
namespace App\Service\Client;

use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use src\Model\Car;
use src\Model\Fuel;
use Symfony\Component\Serializer\Serializer;

class CarClient extends OverheidClient
{
    public function getInfo($plate)
    {
        return $this->parse($this->request("GET", $plate));
    }
    
    public function parse($response)
    {
        $serializer = new Serializer([new ObjectNormalizer()], [new JsonEncoder()]);
        $json = $serializer->decode($response, "json");
        
        /** @var Car $car **/
        $car = $serializer->denormalize($json, Car::class);
        
        foreach ($json["brandstof"] as $fuel) {
            $car->addFuel(
                $serializer->denormalize($fuel, Fuel::class)
            );
        }
        
        var_dump($car);
        return $car;
    }
}

