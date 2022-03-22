<?php

namespace Blog\Repositories\ArticleRepository;

use Blog\Article;
use PDO;

class SqlileArticleRepository
{
    public function __construct(
        private PDO $connection
    )
    {
    }

    public function save(Article $article): void
    {
        // Подготавливаем запрос
        $statement = $this->connection->prepare(
            'INSERT INTO articles (id, author_id, description, text)
            VALUES (:id, :author_id, :description, :text)'
        );

        // Выполняем запрос с конкретными значениями
        $statement->execute([
            ':id' => $article->getId(),
            ':author_id' => $article->getAuthorId(),
            ':description' => $article->getDescription(),
            ':text' => $article->getText(),
        ]);
    }
}