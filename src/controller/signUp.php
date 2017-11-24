<?php
/**
 * Created by PhpStorm.
 * User: enouwin
 * Date: 22/11/2017
 * Time: 14:03
 */

require_once '../DAO.php';
session_start();
$dao = new DAO();
if (!empty($_POST['email']) && !empty($_POST['password']) )
    $user = $dao->signUp($_POST['email'], $_POST['password']);
if (!empty($user))
    $_SESSION['user'] = $user->getEmail();
else
    $_SESSION['user'] = 'not found';
header('Location: ../view/signIn.php');