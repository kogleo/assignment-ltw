<?php
    class SignupModel extends DB {

        public function signup($username, $name, $email, $password, $dob, $gender, $phone) {
            $query = "INSERT INTO members (username, name, email, password, dob, gender, phone) 
                      VALUES ('$username', '$name', '$email', '$password', '$dob', '$gender', '$phone')";
            if (mysqli_query($this->con, $query)) {
                echo "<script type='text/javascript'>alert('Đăng kí thành công');</script>";
                return true;
            }
            else
            {
                if(mysqli_errno($this->con) == 1062)
                {
                     echo "<script type='text/javascript'>alert('username đã tồn tại');</script>";
                } 
                else{
                    echo "<script type='text/javascript'>alert('Đăng kí thất bại');</script>";
                }
                return false;
            }
            
        }
    }
?>