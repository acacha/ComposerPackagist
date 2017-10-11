<?php

class Hello {
    public function hello() {
        $faker = Faker\Factory::create();
        echo 'Hola ' . $faker->name;
    }
}
