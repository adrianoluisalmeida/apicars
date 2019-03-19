<?php

namespace App\Repositories;

use App\Models\Cars;

class CarRepositoryEloquent implements CarRepositoryInterface
{
    private $model;

    public function __construct(Cars $cars)
    {
        $this->model = $cars;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function get($id)
    {
        return $this->model->find($id);
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        return $this->model->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->model->find($id)->delete();
    }
}