<?php
    class LoginModel extends DB {

        public function verifyLogin($username, $password) {
            $query = "SELECT * FROM members WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($this->con, $query);

            if (mysqli_num_rows($result)) {
                return true;
            }
            else
            {
                echo "<script type='text/javascript'>alert('Tên đăng nhập hoặc mật khẩu không chính xác. Vui lòng kiểm tra lại');</script>";
            }
        }
    }
?>