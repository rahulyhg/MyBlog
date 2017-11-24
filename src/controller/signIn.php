<?php
/**
 * Created by PhpStorm.
 * User: enouwin
 * Date: 22/11/2017
 * Time: 14:03
 */

require_once '../DAO.php';
$dao = new DAO();
session_start();
if (!empty($_POST['email']) && !empty($_POST['password']))
    $userMail = $dao->logIn($_POST["email"], $_POST['password']);
if (!empty($userMail)) {
    $_SESSION["user"] = $userMail;
    header("Location: ../view/articles.php");
} else {
    $_SESSION['user'] = "not found";
    header("Location: ../view/signIn.php");
}