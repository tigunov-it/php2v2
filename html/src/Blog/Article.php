<?php

namespace Blog;

use Faker;

class Article
{
    protected int $id;
    protected int $author_id;
    protected string $description;
    protected string $text;

    /**
     * @param int $id
     * @param int $author_id
     * @param string $description
     * @param string $text
     */
    public function __construct(int $id, int $author_id, string $description, string $text)
    {
        $this->id = $id;
        $this->author_id = $author_id;
        $this->description = $description;
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getAuthorId(): int
    {
        return $this->author_id;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }



    public function __toString(): string
    {
        return $this->description . ' >>> ' . $this->text;
    }
}