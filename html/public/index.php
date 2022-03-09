<?php

use Blog\Version\PhpVersion;

require_once '../vendor/autoload.php';

$v = new PhpVersion();

$v->ver();

//use Blog\User;
//use Blog\Article;
//use Blog\Comments;
//
//require_once '../vendor/autoload.php';
//
//$admin = new User();
//echo $admin;
//
//$article = new Article();
//echo $article;
//
//$comment = new Comments();
//echo $comment;