<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navbar.css">
    <meta  charset="UTF-8">
    <title>Mot de passe oublié</title>
</head>
<body>

<?php
$nav = new NavBar();
echo $nav->getNavBar("");
?>
<form action="../controller/pwdlost.php" method="post">
    <p>Your email: <input type="text" name="email" /></p>
    <input type="submit" value="récupérer mot de passe"/>
</form>


</body>
</html>
