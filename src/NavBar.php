<?php
/**
 * Created by PhpStorm.
 * User: enouwin
 * Date: 23/11/2017
 * Time: 22:41
 */

class NavBar
{

    /**
     * NavBar constructor.
     */
    public function __construct()
    {
        session_start();
    }

   public function getNavBar($page)
    {   $html = '<div class="container ">';
        $html .= '<nav class="navbar navbar-expand-lg navbar-light ">';
        $html .= '<a class="navbar-brand" href="articles.php">Enouwin</a>';

        $html .= '<ul class="navbar-nav">';
        $html .= '<li class="nav-item active">';
        if (strcmp($page, "Home") == 0)
            $html .= '<a class="nav-link" href="./articles.php">Home<span class="sr-only">(current)</span></a>';
        else
            $html .= '<a class="nav-link" href="./articles.php">Home</a>';

        if (!empty($_SESSION['user'])) {
            $html .= '<li class="nav-item">';
            if (strcmp($page, "add article") == 0){
                $html .= '<a class="nav-link" href="addArticle.php">Add Article';
                $html .= '<span class="sr-only">(current)</span></a>';
            }
            else
                $html .= '<a class="nav-link" href="addArticle.php">Add Article</a>';
            $html .= '</li>';
            $html .= '<li class="nav-item">';
            $html .= '<a class="nav-link" href="../controller/logout.php">LogOut</a>';
            $html .= '</li>';
            $html .= '</ul>';
        }
        else {
            $html .= '</li>';
            $html .= '<li class="nav-item">';
            $html .= '<a class="nav-link" href="signIn.php">Login</a>';
            $html .= '</li>';
        }

        $html .= '</nav>';
        $html .= '</div>';
        return $html;
    }
}