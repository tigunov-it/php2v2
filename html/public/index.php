<?php

use Blog\User;
use Blog\Article;
use Blog\Comments;

require_once '../vendor/autoload.php';

$admin = new User();
echo $admin;

$article = new Article();
echo $article;

$comment = new Comments();
echo $comment;

// ############################## Код Для задания 1 ################################
//use GeekBrains\Blog\Post;
//use GeekBrains\Person\Name;
//use GeekBrains\Person\Person;
//use GeekBrains\Version\Class_Phpversion;
//
//spl_autoload_register(function ($class) {
//    $file = str_replace(['\\', '_'], [DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR], $class) . '.php';
//
//    if (file_exists($file)) {
//        require $file;
//    }
//});
//
//$post = new Post(
//    new Person(
//        new Name('Иван', 'Никитин'),
//        new DateTimeImmutable()
//    ),
//    'Всем привет!'
//);
//
//print $post;
//
//$showMeTheVersion = new Class_Phpversion();
//$showMeTheVersion->getver();
// ############################## end Код Для задания 1 ################################