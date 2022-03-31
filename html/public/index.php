<?php

use Blog\Http\Request;
use Blog\Http\SuccessfulResponse;
use Blog\Repositories\UsersRepository\SqliteUsersRepository;
use Blog\User;

require_once '../vendor/autoload.php';

//Создаём объект подключения к SQLite
try {
    $connection = new PDO('sqlite:' . __DIR__ . '/../src/Connections/' . '/blog.sqlite');
} catch (PDOException $e) {
    echo 'Ошибка соединения с базой данных' . $e->getMessage();
};

//Создаём объект репозитория пользователей
$usersRepository = new SqliteUsersRepository($connection);

// Создаём объект запроса из суперглобальных переменных
$request = new Request($_GET, $_SERVER);

$path = $request->path();

$username = $request->query('username');
var_dump($username);

echo $usersRepository->get($username);


//// Получаем данные из объекта запроса
//$parameter = $request->query('some_parameter');
//$header = $request->header('Some-Header');
//$path = $request->path();
//
//
//// Создаём объект ответа
//$response = new SuccessfulResponse([
//    'message' => 'Hello from PHP',
//]);
//
//// Отправляем ответ
//$response->send();


//Создаём объект репозитория пользователей
//$usersRepository = new SqliteUsersRepository($connection);
//Добавляем в репозиторий несколько пользователей

//$usersRepository->save(new User('Ivan', 'Nikitin2'));
//$usersRepository->save(new User('Anna2', 'Petrova2'));

//var_dump($usersRepository->get('Ivan'));

