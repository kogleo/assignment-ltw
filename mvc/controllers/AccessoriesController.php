<?php
    class AccessoriesController extends Controller {
        function Show() {
            $addTocart = $this->model("AddToCartModel");
            $accessories = $this->model("ProductsModel");
            $intro = $this->model("IntroModel");
            $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
            if (isset($_POST["accessoriesSearch"])) {
                $search = $_POST["accessoriesSearchInput"];
                $this->view("content", ["Page"=>"accessories", 
                "Accessories"=>$accessories->searchAccessories($search),
                "Search"=>$search]);
            }
            else {
                $this->view("content", ["Page"=>"accessories", 
                                    "Accessories"=>$accessories->getAccessories()]);
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