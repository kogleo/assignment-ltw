<?php
    class AddProductModel extends DB {
        public function addProduct($name, $price, $image, $type, $quantity, $description) {
            $query = "INSERT INTO products(name, price, image, type, quantity, description) values('$name', '$price', '$image', '$type', $quantity, '$description');";
            // echo "<script>console.log(\"Debug Objects: " . $query . " \" );</script>";
            mysqli_query($this->con, $query);
        }
    }
?>