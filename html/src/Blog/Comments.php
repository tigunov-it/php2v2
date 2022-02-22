<?php

namespace Blog;

use Faker;

class Comments
{
    protected int $id;
    protected string $authorId;
    protected string $articleId;
    protected string $text;

    public function __construct()
    {
        $faker = Faker\Factory::create();
        $this->id = $faker->randomNumber();
        $this->authorId = $faker->name;
        $this->articleId = $faker->word;
        $this->text = $faker->realText(100);
    }

    public function __toString(): string
    {
        return $this->text;
    }

}