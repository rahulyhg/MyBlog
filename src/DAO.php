<?php
/**
 * Created by PhpStorm.
 * User: enouwin
 * Date: 23/11/2017
 * Time: 09:06
 */

require __DIR__ . '/../vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class DAO
{
    public $serviceAccount;
    public $firebase;
    public $database;
    public $uidUser;

    public function __construct()
    {
        $this->serviceAccount =
            ServiceAccount::fromJsonFile(__DIR__ . '/../myblog-5b6bf-firebase-adminsdk-fvoav-26320f1a36.json');
        $apiKey = 'AIzaSyCzm2EaWLkgfxCRsq4kOgZUIQvofFWjtE4';
        $this->firebase = (new Factory)
            ->withServiceAccountAndApiKey($this->serviceAccount, $apiKey)
            ->create();
        $this->database = $this->firebase->getDatabase();
    }

    public function getReference($key)
    {
        return $this->database->getReference($key);
    }

    public function addArticle($article)
    {
        $this->database->getReference('articles')->push($article);
    }

    public function getArticles()
    {
        return $this->database->getReference('articles')->getSnapshot()->getValue();
    }

    public function getXArticles()
    {
        return $this->database->getReference('articles')
            ->getSnapshot()->getValue();
    }

    public function resetPassword($email)
    {
        $this->firebase->getAuth()->sendPasswordResetEmail($email);
    }

    public function logIn($mail, $pass)
    {
        $userMail = "";
        try {
            $userMail = $this->firebase->getAuth()->getUserByEmailAndPassword($mail, $pass)->getEmail();
            return $userMail;
        } catch (Exception $e) {
            return $userMail;
        }
    }

    public function signUp($email, $pass)
    {
        try {
            $user = $this->firebase->getAuth()
                ->createUserWithEmailAndPassword($email, $pass);
            return $user;
        } catch (Exception $e) {
            return '';
        }

    }
}