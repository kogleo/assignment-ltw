<?php
    class AddMemberController extends Controller {
        function Show() {     
            $addMember = $this->model('addMemberModel');   
            $this->view("addMember", []);

            if(isset($_POST['addMember'])) {
                $username = $_POST['username'];
                $name = $_POST['name'];
                $mail = $_POST['mail'];
                $phone = $_POST['phone'];
                $avatar = $_POST['avatar'];
                $dob = $_POST['dob'];
                $gender = $_POST['gender'];
                $password = $_POST['password'];
                if(strlen($username) > 0 && strlen($name) > 0 && strlen($mail) > 0 && strlen($phone) > 0
                   && strlen($dob) > 0 && strlen($gender) > 0 && strlen($password) > 0) {
                    $addMember->addMember($username, $name, $mail, $phone, $avatar, $dob, $gender, $password);
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
                }
                // echo "<script>console.log(\"Debug Objects: " . $price . " \" );</script>";
                else echo   '<div class="text-danger text-center">
                                <strong>Invalid input!</strong>
                            </div>';
            }
        }
    }
?>