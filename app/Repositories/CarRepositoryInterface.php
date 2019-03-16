<?php

namespace App\Repositories;

use App\Models\Cars;

interface CarRepositoryInterface
{
    public function __construct(Cars $cars);

	public function getAll();
	
	public function get($id);
	
	public function store(array $data);
	
	public function update($id, array $data);
	
	public function destroy($id);
}