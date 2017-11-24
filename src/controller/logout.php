<?php
/**
 * Created by PhpStorm.
 * User: enouwin
 * Date: 23/11/2017
 * Time: 20:16
 */
session_start();
$_SESSION = [];
session_destroy();
header('Location: ../view/articles.php');
