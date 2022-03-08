<?php
    class AddToCartModel extends DB {

        public function addToCart($username, $productId) {
            $check = "SELECT * FROM products_in_member_cart WHERE username = '$username' and productId = '$productId'";
            $result = mysqli_query($this->con, $check);
            if (mysqli_num_rows($result) == 0) {
                $query = "INSERT INTO products_in_member_cart(username, productId, quantity) values('$username', '$productId', 1)";
                mysqli_query($this->con, $query);
            } else {
                $row =  mysqli_fetch_array($result);
                $quantity = $row['quantity'] + 1;
                $query = "UPDATE products_in_member_cart SET quantity = '$quantity' WHERE username = '$username' and productId = '$productId'";
                mysqli_query($this->con, $query);
            }
        }
    }
?>