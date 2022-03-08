<?php
    class CartModel extends DB {

        public function getProductsInCart() {
            $username = $_SESSION["username"];
            $query = "SELECT * FROM products p, products_in_member_cart c 
                        WHERE p.id = c.productId AND c.username = '$username'";
            return mysqli_query($this->con, $query);
        }
        public function deleteProduct($productId) {
            $query = "DELETE FROM products_in_member_cart WHERE productId = '$productId'";
            mysqli_query($this->con, $query);
        }
        public function deleteAllProducts() {
            $query = "DELETE FROM products_in_member_cart";
            mysqli_query($this->con, $query);
        }
        public function plusQuantity($productId, $quantity) {
            $username = $_SESSION["username"];
            $query = "UPDATE products_in_member_cart SET quantity = '$quantity'
                        WHERE productId = '$productId' AND username = '$username'";
            mysqli_query($this->con, $query);
        }
        public function minusQuantity($productId, $quantity) {
            $username = $_SESSION["username"];
            $query = "UPDATE products_in_member_cart SET quantity = '$quantity'
                        WHERE productId = '$productId' AND username = '$username'";
            mysqli_query($this->con, $query);
        }
    }
?>