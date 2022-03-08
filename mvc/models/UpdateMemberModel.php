<?php
    class UpdateMemberModel extends DB {

        public function getMember($username){
            $query = "SELECT * FROM members WHERE username = '$username';";
            return mysqli_query($this->con, $query);
        }

        public function updateMember($username, $name, $mail, $phone, $avatar, $dob, $gender, $password) {
            $query = "UPDATE members SET name = '$name', email = '$mail', phone = '$phone', avatar = '$avatar', 
            dob = '$dob', gender = '$gender', password = '$password' WHERE username = '$username';";
            mysqli_query($this->con, $query);
        }
    }
?>