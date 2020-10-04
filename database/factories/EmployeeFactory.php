<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [

      'firstname' => $facker -> firstname(),
      'lastname' => $facker -> lastname(),
      'date_of_birth' => $facker -> date(),
      'private_code' => $facker -> isbn13()


    ];
});
