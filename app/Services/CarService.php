<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

use App\Models\ValidationCar;
use App\Repositories\CarRepositoryInterface;
use App\Exceptions\CustomValidationException;

class CarService
{
    private $repo;

    public function __construct(CarRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }
    public function getAll()
    {
        return $this->repo->getAll();
    }

    public function get($id)
    {
        return $this->repo->get($id);
    }

    public function store(array $data)
    {
        $validator = Validator::make($data, ValidationCar::RULE_CAR);

        if ($validator->fails()) {
            throw new CustomValidationException('Falha na validação dos dados', $validator->errors());
        }
        
        return $this->repo->store($data);
    }

    public function update($id, array $data)
    {
        $validator = Validator::make($data, ValidationCar::RULE_CAR);

        if ($validator->fails()) {
            throw new CustomValidationException('Falha na validação dos dados', $validator->errors());
        }
        
        return $this->repo->update($id, $data);
    }

    public function destroy($id)
    {
        return $this->repo->destroy($id);
    }
}