<?php
/**
 * Created by PhpStorm.
 * User: enouwin
 * Date: 23/11/2017
 * Time: 10:55
 */
require_once "DAO.php";

class Paginator
{
    private $_dao;
    private $_total;
    private $_start;
    private $_limit;
    private $_page;
    private $_end;
    private $_data;

    public function __construct()
    {
        $this->_dao = new DAO;

        //get the data from Firebase
        $this->_data = $this->_dao->getXArticles();
    }

    public function getData($limit = 5, $page = 1)
    {

        //set the limit
        ($limit > 0) ?
            $this->_limit = $limit :
            $this->_limit = 5;
        //set the page
        ($page > 0) ?
            $this->_page = $page :
            $this->_page = 1;
        //set the total
        $this->_limit * $this->_page < count($this->_data) ?
            $this->_total = $this->_limit * $this->_page :
            $this->_total = count($this->_data);

        //set the first article to show
        ($this->_page * $this->_limit - $this->_limit  > 0) ?
            $this->_start = $this->_page * $this->_limit - $this->_limit:
            $this->_start = 0;

        //set the last article to show
        ($this->_start + $this->_limit < count($this->_data)) ?
            $this->_end = $this->_start + $this->_limit :
            $this->_end = count($this->_data);


        //   var_dump($this->_data);
        foreach ($this->_data as $article) {
            $res[] = $article;
        }

        for ($i = $this->_start; $i < $this->_end; $i++) {
            $results[] = $res[$i];
        }

        $result = new stdClass();
        $result->page = $this->_page;
        $result->limit = $this->_limit;
        $result->total = $this->_total;
        $result->data = $results;

        return $result;
    }

    public function createLinks($list_class)
    {
        $html = '<div class="container-center">';
        $html .= '<div class="links text-center">';
        $html .= '<ul class="' . $list_class . ' text-center">';
        if ($this->_page  > 1)
            $html .= '<li><a class="text-center" href="?limit=' . $this->_limit . '&page=' . ($this->_page - 1) . '" >&laquo;</a></li>';
        else
            $html .= '<li class="disable text-center"><a class="text-center" href="#">&laquo;</a></li>';


        for ($i = 1; $i <= $this->_total / $this->_limit + 1; $i++) {
            if ($this->_page == $i)
                $html .= '<li class="active text-center"><a class="text-center" href="#" >'.$i.'<span class="sr-only">(current)</span></a></li>';
            else
                $html .= '<li><a class="text-center" href="?limit=' . $this->_limit . '&page=' . $i . '" >'.$i.'</a></li>';
        }

        if ($this->_total/ $this->_limit + 1 >=  ($this->_page + 1))
            $html .= '<li class="text-center"><a class="text-center" href="?limit=' . $this->_limit . '&page=' . ($this->_page + 1) . '" > &raquo;</a></li>';
        else
            $html .= '<li class="disable text-center"><a class="text-center" href="#" > &raquo;</a></li>';
        $html .= '</ul>';
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }
}