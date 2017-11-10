<?php

namespace Acacha;

use Faker\Factory;

/**
 * Class Hello.
 *
 * @package Acacha
 */
class Hello {
    public function hello() {
        $faker = Factory::create();
        echo 'Hola ' . $faker->name;
    }
}
