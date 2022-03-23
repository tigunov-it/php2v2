<?php

use Blog\Comments;
use Blog\Repositories\CommentsRepository\SqliteCommentsRepository;
use PHPUnit\Framework\TestCase;

class CommentSaveToRepository extends TestCase
{
    private $connection;
    private $commentsRepository;
    private $comment;

    protected function getConnection()
    {
        $this->connection = new PDO('sqlite:' . __DIR__ . '/../src/Connections/' . '/blog.sqlite');
    }

    protected function setRepositoryComments()
    {
        $this->commentsRepository = new SqliteCommentsRepository($this->connection);
    }

    protected function setComment()
    {
        $this->comment = new Comments(1, 123, 2, 'Комментарий из теста');
    }

    protected function testSaveComment()
    {
        $this->commentsRepository->save($this->comment);
    }

    protected function testGetComment()
    {
        $this->assertEquals('123', $this->comment->getId());
    }

}