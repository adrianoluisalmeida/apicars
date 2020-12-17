<?php

use Illuminate\Database\Seeder;
use App\Models\Cars;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            [
                'name' => 'Gol',
                'description' => 'Gol Novo',
                'model' => 'VW',
                'date' => '2018-01-21'
            ],
            [
                'name' => 'Voyage',
                'description' => 'Voyage Novo',
                'model' => 'VW',
                'date' => '2018-02-21'
            ],
            [
                'name' => 'Fusca',
                'description' => 'Fuscao turbinado',
                'model' => 'VW',
                'date' => '2018-03-21'
            ],
            [
                'name' => 'Palio',
                'description' => 'Novo Palio',
                'model' => 'Fiat',
                'date' => '2018-04-22'
            ]

        ];
        
        foreach ($cars as $car) {
            Cars::create([
                'name' => $car['name'],
                'description' => $car['description'],
                'model' => $car['model'],
                'date' => $car['date']
            ]);
        }
    }
}
