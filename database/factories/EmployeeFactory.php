<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
      'name' => $faker->name('male'|'female') ,
        'password'=>md5('123456'),
        'email' => $faker->unique()->safeEmail,
        'birth_date'=>$faker->date($format = 'Y-m-d', $max = '2000-12-12') ,
        'salary'=>$faker->numberBetween($min = 1000, $max = 9000) ,
        'role'=>$faker->randomElement($array = array ('Admin','Teacher','Student')) ,
        'address'=>$faker->streetAddress  ,
        'city'=>$faker->city ,
        'country'=>$faker->country
    ];
});
