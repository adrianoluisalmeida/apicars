<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 30/07/18
 * Time: 22:18
 */

namespace App\Models;


class ValidationCar
{
    const RULE_CAR = [
        'name' => 'required | max:80',
        'description' => 'required',
        'model' => 'required | max:10 | min:2',
        'date' => 'required | date_format: "Y-m-d"'
    ];
}