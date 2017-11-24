<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/addArticle.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>Ajouter un article</title>
</head>
<body>
<div>
<?php
require_once "../NavBar.php";
$nav = new NavBar();
echo $nav->getNavBar("add article");
?>

    <div id="logbox">
        <form id="addArticle" method="post" action="../controller/addArticle.php">
            <h1>Ajouter un article</h1>
            <input id="title" type="text" name="title" placeholder="Titre" class="input pass" required /><br>
            <textarea id="article" rows="5" name="article" placeholder="Article" class="input pass" required></textarea><br>
            <textarea id="description"  rows="2"  name="desc" placeholder="description" class="input pass" required></textarea><br>
            <input id="url" type="text" name="url" placeholder="Url d'une image" class="input pass" required /><br>
            <input type="submit" value="Poster article!" class="inputButton"/>
        </form>
    </div>

</div>
</body>
<style>
    input:invalid {
        box-shadow: 0 0 5px 1px red;
    }

    input:focus:invalid {
        outline: none;
    }
</style>
</html>