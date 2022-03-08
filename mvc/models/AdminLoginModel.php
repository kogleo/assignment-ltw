<?php
    class AdminLoginModel extends DB {

        public function verifyLogin($username, $password) {
            $query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($this->con, $query);
            if (mysqli_num_rows($result)) {
                return true;
            }
            return false;
        }
    }
?>