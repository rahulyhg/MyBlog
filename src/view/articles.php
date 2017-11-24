<?php
require_once '../Paginator.php';

$limit = (isset($_GET['limit'])) ? $_GET['limit'] : 5;
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
$links = (isset($_GET['links'])) ? $_GET['links'] : 1;

$Paginator = new Paginator();
$results = $Paginator->getData($limit, $page);

?>

<!DOCTYPE html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/articles.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
<div>
<?php
require_once "../NavBar.php";
$nav = new NavBar();
echo $nav->getNavBar("Home");
?>
<div class="container">
    <div class="row">
        <?php for ($i = 0; $i < count($results->data); $i++) : ?>
            <div class=" col">
                <div class="card">
                    <img class="card-img-top"
                         src=<?php echo $results->data[$i]['photo']; ?>>
                    <div class="card-block">
                        <h4 class="card-title"><?php echo $results->data[$i]['title']; ?></h4>
                        <div class="card-text">
                            <?php echo $results->data[$i]['description']; ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="float-right"><?php echo $results->data[$i]['author']; ?></span>
                    </div>
                </div>
            </div>
        <?php endfor; ?>

    </div>
</div>
    <div class="container-center">
        <?php echo $Paginator->createLinks('pagination'); ?>
    </div>
    <div class="text-center">
        <?php
        if (!empty($_SESSION['user']) && strcmp($_SESSION['user'], 'not found') != 0)
            echo '<a id="" href="addArticle.php">ajouter un article</a>';
        else
            echo '<a id="" href="signIn.php">ajouter un article</a>';
        ?>
    </div>
</div>
</body>

</html>