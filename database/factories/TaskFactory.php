<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
      'name' => $facker -> word(),
      'description' => $facker -> text(),
      'start_date' => $facker -> date(),
      'end_date' => $facker -> date()
    ];
});
