<?php

use Blog\Article;
use Blog\Comments;
use Blog\Repositories\ArticleRepository\SqlileArticleRepository;
use Blog\Repositories\CommentsRepository\SqliteCommentsRepository;
use Blog\Repositories\UsersRepository\SqliteUsersRepository;
use Blog\User;

require_once '../vendor/autoload.php';

//Создаём объект подключения к SQLite
$connection = new PDO('sqlite:' . __DIR__ . '/../src/Connections/' . '/blog.sqlite');

//Создаём объект репозитория пользователей
$usersRepository = new SqliteUsersRepository($connection);

//Добавляем в репозиторий несколько пользователей
$usersRepository->save(new User('Ivan', 'Nikitin'));
$usersRepository->save(new User('Anna', 'Petrova'));


//Создаем объект репозитория комментариев
$commentsRepository = new SqliteCommentsRepository($connection);

//Добавляем в репозиторий несколько комментариев
$commentsRepository->save(new Comments(1, 123, 2, 'Первый комментарий'));
$commentsRepository->save(new Comments(2, 234, 3, 'Второй комментарий'));


//Создаем объект репозитория статей
$articleRepository = new SqlileArticleRepository($connection);

//Добавляем в репозиторий несколько статей
$articleRepository->save(new Article(1, 123, 'Описание первой статьи', 'Текст первой статьи'));
$articleRepository->save(new Article(1, 123, 'Описание второй статьи', 'Текст второй статьи'));
