<?php

namespace Blog;

//use Faker;

class Comments
{
    protected int $id;
    protected int $author_id;
    protected int $article_id;
    protected string $text;

    /**
     * @param int $id
     * @param int $author_id
     * @param int $article_id
     * @param string $text
     */
    public function __construct(int $id, int $author_id, int $article_id, string $text)
    {
        $this->id = $id;
        $this->author_id = $author_id;
        $this->article_id = $article_id;
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
     * @return int
     */
    public function getArticleId(): int
    {
        return $this->article_id;
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
        return $this->text;
    }

}