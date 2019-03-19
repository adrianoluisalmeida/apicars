<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Services\CarService;

class CarsController extends Controller
{
    private $service;

    public function __construct(CarService $service)
    {
        $this->service = $service;
    }

    public function getAll()
    {
        try {
            return response()->json($this->service->getAll(), Response::HTTP_OK);
        } catch (\Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    public function get($id)
    {
        $car = $this->service->get($id);

        try {
            return response()->json($car, Response::HTTP_OK);
        } catch (\Exception $e) {
            return $this->error();
        }
    }

    public function store(Request $request)
    {
        try {
            return response()->json(
                $this->service->store($request->all()), 
                Response::HTTP_CREATED
            );
        } catch (\Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        try {
            return response()->json(
                $this->service->update($id, $request->all()), 
                Response::HTTP_OK
            );
        } catch (CustomValidationException $e) {
            return $this->error($e->getMessage(), $e->getDetails());
        } catch (\Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            return response()->json(
                $this->service->destroy($id), 
                Response::HTTP_OK
            );
        } catch (\Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}
