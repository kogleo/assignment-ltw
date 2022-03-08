<?php
    class UpdateProductModel extends DB {

        public function getProductId($id){
            $query = "SELECT * FROM products WHERE id = '$id';";
            return mysqli_query($this->con, $query);
        }

        public function updateProduct($id, $name, $price, $image, $type, $quantity, $description) {
            $query = "UPDATE products SET name = '$name', price = '$price', image = '$image', type = '$type', quantity = '$quantity', description = '$description' WHERE id = '$id';";
            // echo "<script>console.log(\"Debug Objects: " . $query . " \" );</script>";
            mysqli_query($this->con, $query);
        }
    }
?>