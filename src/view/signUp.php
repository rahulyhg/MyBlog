<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/signUp.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>Test PHP</title>

</head>
<body>

<?php
require_once "../NavBar.php";
$nav = new NavBar();
echo $nav->getNavBar("");
?>
<div id="logbox">
    <form id="signup" method="post" action="../controller/signUp.php">
        <h1>Créer un compte</h1>
        <input name="password" type="password" placeholder="Choisissez un mot de passe" required="required" class="input pass"/>
        <input name="email" type="email" placeholder="Adresse email" class="input pass"/>
        <input type="submit" value="Inscrivez moi!" class="inputButton"/>
        <div class="text-center">
            already have an account? <a href="signIn.php" id="login_id">login</a>
        </div>
    </form>
</div>

</body>

</html>