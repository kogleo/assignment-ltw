<?php
    class CartController extends Controller {
        function Show() {
            if (isset($_SESSION["username"])) {
                $intro = $this->model("IntroModel");
                $cart = $this->model("CartModel");
                $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
                $this->view("content", ["Page"=>"cart", "Product"=>$cart->getProductsInCart()]);
                $this->view("footer", ["Contact"=>$intro->getContact()]);
                if (isset($_POST["delete"])) {
                    $productId = $_POST["delete"];
                    echo $productId;
                    $cart->deleteProduct($productId);
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/Cart">';
                } 
                if (isset($_POST["deleteAll"])) {
                    $cart->deleteAllProducts();
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/Cart">';
                }
                if (isset($_POST["plus"])) {
                    $productId = $_POST["productId"];
                    $quantity = $_POST["quantityPlus"] + 1;
                    $cart->plusQuantity($productId, $quantity);
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/Cart">';
                }
                if (isset($_POST["minus"])) {
                    $productId = $_POST["productId"];
                    $quantity = $_POST["quantityMinus"] - 1;
                    if ($quantity != 0) {
                        $cart->minusQuantity($productId, $quantity);
                        echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/Cart">';
                    }
                }
            } else {
                echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/Login">';
            }
        }
    }
?>