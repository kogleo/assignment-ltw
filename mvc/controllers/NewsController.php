<?php
    class NewsController extends Controller {
        function Show() {
            $news = $this->model('NewsModel'); 
            $intro = $this->model("IntroModel");
            $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
            $this->view("content", ["Page"=>"news", "titles"=>$news->getPosts(), "posts"=>$news->getPosts()]);
            $this->view("footer", ["Contact"=>$intro->getContact()]);
        }
    }
?>