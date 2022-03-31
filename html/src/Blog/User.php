<?php

namespace Blog;
//use Faker;

class User
{
    protected int $id;
    protected string $name;
    protected string $surname;

    /**
     * @param string $name
     * @param string $surname
     */
    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function __toString(): string
    {
        return $this->name . ' ' . $this->surname;
    }

    /**
     * @return int
     */
    public function Id(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function Name(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function Surname(): string
    {
        return $this->surname;
    }

}