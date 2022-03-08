<?php
    class AccountModel extends DB {

        public function getInfo() {
            $username = $_SESSION["username"];
            $query = "SELECT * FROM members WHERE username = '$username'";
            return mysqli_query($this->con, $query);
        }
        public function updateInfo($name, $dob, $gender, $phone, $email) {
            $username = $_SESSION["username"];
            $query = "UPDATE members 
                      SET name = '$name', dob = '$dob', gender = '$gender', phone = '$phone', email = '$email'
                      WHERE username = '$username'";
            return mysqli_query($this->con, $query);
        }
        public function changePassword($password) {
            $username = $_SESSION["username"];
            $query = "UPDATE members 
                      SET password = '$password'
                      WHERE username = '$username'";
            return mysqli_query($this->con, $query);
        }
        public function changeAvatar($path) {
            $username = $_SESSION["username"];
            $query = "UPDATE members 
                      SET avatar = '$path'
                      WHERE username = '$username'";
            return mysqli_query($this->con, $query);
        }
    }
?>