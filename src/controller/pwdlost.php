<?php
/**
 * Created by PhpStorm.
 * User: enouwin
 * Date: 22/11/2017
 * Time: 14:33
 */

require_once '../DAO.php';
$dao = new DAO();
if (!empty($_POST['email']))
    $dao->resetPassword($_POST['email']);

header('Location: ../view/articles.php');
