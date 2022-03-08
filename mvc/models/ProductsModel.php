<?php
    class ProductsModel extends DB {

        public function getPrintingInk() {
            $query = "SELECT * FROM products WHERE type = 'Mực in'";
            return mysqli_query($this->con, $query);
        }

        public function getPrinter() {
            $query = "SELECT * FROM products WHERE type = 'Máy in'";
            return mysqli_query($this->con, $query);
        }

        public function getOfficeMachine() {
            $query = "SELECT * FROM products WHERE type = 'Máy văn phòng'";
            return mysqli_query($this->con, $query);
        }

        public function getTechnologyEquipment() {
            $query = "SELECT * FROM products WHERE type = 'Thiết bị công nghệ'";
            return mysqli_query($this->con, $query);
        }

        public function getAccessories() {
            $query = "SELECT * FROM products WHERE type = 'Phụ kiện văn phòng'";
            return mysqli_query($this->con, $query);
        }
        
        public function searchPrintingInk($string){
            $search = mysqli_real_escape_string($this->con, $string);
            $query = "SELECT * FROM products WHERE type = 'Mực in' AND name LIKE '%$search%';";
            return mysqli_query($this->con, $query);
        }
        public function searchPrinter($string){
            $search = mysqli_real_escape_string($this->con, $string);
            $query = "SELECT * FROM products WHERE type = 'Máy in' AND name LIKE '%$search%';";
            return mysqli_query($this->con, $query);
        }
        public function searchOfficeMachine($string){
            $search = mysqli_real_escape_string($this->con, $string);
            $query = "SELECT * FROM products WHERE type = 'Máy văn phòng' AND name LIKE '%$search%';";
            return mysqli_query($this->con, $query);
        }
        public function searchTechnologyEquipment($string){
            $search = mysqli_real_escape_string($this->con, $string);
            $query = "SELECT * FROM products WHERE type = 'Thiết bị công nghệ' AND name LIKE '%$search%';";
            return mysqli_query($this->con, $query);
        }
        public function searchAccessories($string){
            $search = mysqli_real_escape_string($this->con, $string);
            $query = "SELECT * FROM products WHERE type = 'Phụ kiện văn phòng' AND name LIKE '%$search%';";
            return mysqli_query($this->con, $query);
        }
    }
?>