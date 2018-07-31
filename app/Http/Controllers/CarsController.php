<?php

namespace App\Http\Controllers;

use App\Services\CarService;
use Illuminate\Http\Request;


class CarsController extends Controller
{
    private $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }


    public function getAll()
    {
        return $this->carService->getAll();

    }

    public function get($id)
    {
        return $this->carService->get($id);
    }


    public function store(Request $request)
    {
        return $this->carService->store($request);
    }

    public function update($id, Request $request)
    {
        return $this->carService->update($id, $request);

    }

    public function destroy($id)
    {
        return $this->carService->destroy($id);
    }


}
