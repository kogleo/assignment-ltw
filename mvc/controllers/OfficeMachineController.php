<?php
    class OfficeMachineController extends Controller {
        function Show() {
            $addTocart = $this->model("AddToCartModel");
            $officeMachine = $this->model("ProductsModel");
            $intro = $this->model("IntroModel");
            $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
            if (isset($_POST["officeMachineSearch"])) {
                $search = $_POST["officeMachineSearchInput"];
                $this->view("content", ["Page"=>"officeMachine", 
                "OfficeMachine"=>$officeMachine->searchOfficeMachine($search),
                "Search"=>$search]);
            }
            else {
                $this->view("content", ["Page"=>"officeMachine", 
                                    "OfficeMachine"=>$officeMachine->getOfficeMachine()]);
            }
            $this->view("footer", ["Contact"=>$intro->getContact()]);
            if (isset($_POST["addToCart"])) {
                if (isset($_SESSION["username"])) {
                    $addTocart->addToCart($_SESSION["username"], $_POST["addToCart"]);
                } else {
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/Login">';
                }
            }
        }
    }
?>