<?php

namespace Blog;
use Faker;

class User
{
    protected int $id;
    protected string $name;
    protected string $surname;


    public function __construct()
    {
        $faker = Faker\Factory::create();
        $this->id = $faker->randomNumber();
        $this->name = $faker->firstName;
        $this->surname = $faker->lastName;
    }

    public function __toString(): string
    {
        return $this->name . ' ' . $this->surname;
    }
}