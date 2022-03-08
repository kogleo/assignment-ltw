<?php
    class DetailNewsController extends Controller {
        function Show() {
            $news = $this->model('NewsModel');
            if (isset($_POST['postId'])) {
                $_SESSION['postId'] = $_POST['postId'];
            }
            if (isset($_SESSION['postId'])) {
                $intro = $this->model("IntroModel");
                $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
                $this->view("content", ["Page"=>"detailNews", "titles"=>$news->getPosts(), "posts"=>$news->getPosts()
                                        , "post"=>$news->getPostId($_SESSION['postId']), 
                                        "comments"=>$news->getComments($_SESSION['postId'])]);
                $this->view("footer", ["Contact"=>$intro->getContact()]);
                if (isset($_POST["comment"])) {
                    if (isset($_SESSION["username"])) {
                        $news->addComment($_SESSION['username'], $_SESSION['postId'], $_POST['comment']);
                        echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/DetailNews">';
                    } else {
                        echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/Login">';
                    }
                }
            }
            //$this->view("detailNews", ["titles"=>$news->getPosts(), "posts"=>$news->getPosts()]);
            //$this->view("comment", []);
        }
    }
?>