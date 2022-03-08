<?php
    class AddMemberModel extends DB {

        public function addMember($username, $name, $mail, $phone, $avatar, $dob, $gender, $password) {
            $query = "INSERT INTO members(username, name, email, phone, avatar, dob, gender, password) VALUES ('$username', '$name', '$mail', '$phone', '$avatar', 
                    '$dob', '$gender', '$password');";
             if (mysqli_query($this->con, $query)) {
                echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
                return true;
            }
            else
            {
                if(mysqli_errno($this->con) == 1062)
                {
                     echo "<script type='text/javascript'>alert('username đã tồn tại');</script>";
                } 
                else{
                    echo "<script type='text/javascript'>alert('Thêm thất bại');</script>";
                }
                return false;
            }
        }
    }
?>