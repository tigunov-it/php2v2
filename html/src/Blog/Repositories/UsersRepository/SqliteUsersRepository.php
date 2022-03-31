<?php

namespace Blog\Repositories\UsersRepository;

use Blog\User;
use PDO;
use PDOStatement;

class SqliteUsersRepository
{
    public function __construct(private PDO $connection)
    {
    }

    public function save(User $user): void
    {
        // Подготавливаем запрос
        $statement = $this->connection->prepare(
            'INSERT INTO users (first_name, last_name)
            VALUES (:first_name, :last_name)'
        );

        // Выполняем запрос с конкретными значениями
        $statement->execute([
            ':first_name' => $user->name(),
            ':last_name' => $user->Surname(),
        ]);
    }

    public function get(string $name): string
    {
        $sql = $this->connection->prepare("SELECT * FROM users WHERE first_name = :name");
        $sql->execute(['name'=>$name]);
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($result);
    }

    public function set()
    {

    }

}