<?php

use Blog\User;
use Blog\Article;
use Blog\Comments;

require_once '../vendor/autoload.php';

switch ($argv[1]) {
    case 'user':
        $admin = new User();
        echo $admin;
        break;
    case 'post':
        $article = new Article();
        echo $article;
        break;
    case 'comment':
        $comment = new Comments();
        echo $comment;
}
