<?php
    class UpdateMemberController extends Controller {
        function Show() {     
            $updateMember = $this->model('UpdateMemberModel');     
            $username = "";
            if (isset($_POST['username'])) {
                $username = $_POST['username'];
            } else {
                echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
            }
            $intro = $this->model("IntroModel");
            $this->view("updateMember", [
                'Member'=>$updateMember->getMember($username), "LogoTitle"=>$intro->getLogo()
            ]);
            
            if(isset($_POST['MemberUpdate'])) {
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
                    $updateMember->updateMember($username, $name, $mail, $phone, $avatar, $dob, $gender, $password);
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
                }
                else echo   '<div class="text-danger text-center">
                                <strong>Invalid input!</strong>
                            </div>';
            }
        }
    }
?>