<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Exception\ExceptionHandler;
use App\Service\Client\OverheidClient;
use App\Service\Client\CarClient;

class CarController extends BaseController
{
    public function carInfo(
        Request $request,
        CarClient $client,
        ExceptionHandler $exceptionHandler
    ): Response
    {
        try {
            $this->setResponseSucceeded([
                $client->getInfo($request->get("plate"))
            ]);
        }
        catch (\Exception $exception) {
            $this->setResponseFailed(
                ...$exceptionHandler->handle($exception)
            );
        }
        
        return $this->response;
    }
}

