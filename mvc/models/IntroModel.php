<?php
    class IntroModel extends DB {

        public function customerBenefits() {
            $query = "SELECT * FROM resources WHERE name = 'Lợi ích khách hàng'";
            return mysqli_query($this->con, $query);
        }
        public function costSavings() {
            $query = "SELECT * FROM resources WHERE name = 'Tiết kiệm chi phí'";
            return mysqli_query($this->con, $query);
        }
        public function customerCare() {
            $query = "SELECT * FROM resources WHERE name = 'Chăm sóc khách hàng hoàn hảo'";
            return mysqli_query($this->con, $query);
        }
        public function warrantyService() {
            $query = "SELECT * FROM resources WHERE name = 'Dịch vụ bảo hành chu đáo'";
            return mysqli_query($this->con, $query);
        }
        public function internationalQuality() {
            $query = "SELECT * FROM resources WHERE name = 'Chất lượng quốc tế'";
            return mysqli_query($this->con, $query);
        }
        public function maintenance() {
            $query = "SELECT * FROM resources WHERE name = 'Bảo trì, sửa chữa miễn phí'";
            return mysqli_query($this->con, $query);
        }
        public function getLogo() {
            $query = "SELECT * FROM resources WHERE name = 'Logo'";
            return mysqli_query($this->con, $query);
        }
        public function getContact() {
            $query = "SELECT * FROM contacts WHERE id = 1";
            return mysqli_query($this->con, $query);
        }
    }
?>