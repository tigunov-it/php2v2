<?php

namespace Blog;
//use Faker;

class User
{
    protected int $id;
    protected string $name;
    protected string $surname;

    /**
     * @param int $id
     * @param string $name
     * @param string $surname
     */
    public function __construct(int $id, string $name, string $surname)
    {
        $this->id = $id;
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