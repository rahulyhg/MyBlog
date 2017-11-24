<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/signIn.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>Test PHP</title>

</head>
<body>

<?php
require_once "../NavBar.php";
$nav = new NavBar();
echo $nav->getNavBar("");
?>
<?php

if (!empty($_SESSION['user']) && strcmp($_SESSION['user'], 'not found') == 0)
    echo "USER NOT FOUND";
if (!empty($_SESSION['user']) && strcmp($_SESSION['user'], 'not found') != 0)
    header("Location: ../view/articles.php");
?>

<div id="logbox">
    <form id="signup" method="post" action="../controller/signIn.php">
        <h1>account login</h1>
        <input name="email" type="email" placeholder="enter your email" class="input pass"/>
        <input name="password" type="password" placeholder="enter your password" required="required"
               class="input pass"/>
        <input type="submit" value="Sign me in!" class="inputButton"/>
        <div class="text-center"">
            <a href="signUp.php" id="">pas de compte ?</a> - <a href="pwdlost.php" id="">mot de passe oublié</a>
        </div>
    </form>
</div>
</body>

</html>