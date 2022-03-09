<?php

namespace Blog\Repositories\CommentsRepository;

use Blog\Comments;
use Blog\User;
use PDO;

class SqliteCommentsRepository
{
    public function __construct(
        private PDO $connection
    )
    {
    }

    public function save(Comments $comment): void
    {
        // Подготавливаем запрос
        $statement = $this->connection->prepare(
            'INSERT INTO comments (id, author_id, article_id, text)
            VALUES (:id, :author_id, :article_id, :text)'
        );

        // Выполняем запрос с конкретными значениями
        $statement->execute([
            ':id' => $comment->getId(),
            ':author_id' => $comment->getAuthorId(),
            ':article_id' => $comment->getArticleId(),
            ':text' => $comment->getText(),
        ]);
    }
}