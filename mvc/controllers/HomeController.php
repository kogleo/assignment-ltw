<?php
    class HomeController extends Controller {
        function Show() {
            $intro = $this->model("IntroModel");
            $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
            $this->view("slider", []);
            $this->view("footer", ["Contact"=>$intro->getContact()]);
        }
    }
?>