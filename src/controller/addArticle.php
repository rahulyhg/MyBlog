<?php
/**
 * Created by PhpStorm.
 * User: enouwin
 * Date: 22/11/2017
 * Time: 15:54
 */

require_once '../DAO.php';
session_start();
$dao = new DAO();
$dao->addArticle([
    'title' => $_POST['title'],
    'article' => $_POST['article'],
    'description' => $_POST['desc'],
    'author' => $_SESSION['user'],
    'photo' => $_POST['url']
]);
header("Location: ../view/articles.php");