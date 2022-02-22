<?php

namespace Blog;

use Faker;

class Article
{
    protected int $id;
    protected string $authorId;
    protected string $description;
    protected string $text;


    public function __construct()
    {
        $faker = Faker\Factory::create();
        $this->id = $faker->randomNumber();
        $this->authorId = $faker->name;
        $this->description = $faker->word;
        $this->text = $faker->realText(100);
    }

    public function __toString(): string
    {
        return $this->description . ' >>> ' . $this->text;
    }
}