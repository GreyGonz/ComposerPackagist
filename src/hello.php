<?php

Class Hello {



    public function hello() {
        $faker = Faker\Factory::create();
        echo "Hello " . $faker->name;

    }
};
