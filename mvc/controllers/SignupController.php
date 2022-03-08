<?php
    class SignupController extends Controller {
        function Show() {
            $intro = $this->model("IntroModel");
            $this->view("signup", ["LogoTitle"=>$intro->getLogo()]);
            if (isset($_POST["signup"])) {
                // Validate

                $valid = true;

                $username = $_POST["username"];
                $name = $_POST["name"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $dob = $_POST["dob"];
                $gender = "";
                $accept = "";
                if (isset($_POST["gender"]) and isset($_POST["accept"])) {
                    $gender = $_POST["gender"];
                    $accept = $_POST["accept"];
                }
                $phone = $_POST["phone"];
                $rePassword = $_POST["rePassword"];
                if ($username != "" and $name != "" and $email != "" and $password != "" 
                    and $dob != "" and $gender != "" and $phone != "" and $rePassword != ""
                    and $accept != "") {
                    // Validate username
                    if (strlen($username) > 20) $valid = false;
                    // Validate name
                    if (strlen($name) > 30) $valid = false;
                    // Validate email
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $valid = false;
                    }
                    // Validate password
                    if (strlen($password) > 20) $valid = false;
                    // Validate rePassword
                    if (strlen($rePassword) > 20 or $rePassword != $password) $valid = false;
                    // Validate dob
                    if (!(preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $dob))) {
                        $valid = false;
                    }
                    // Validate gender 
                    if (!($gender == "Nam" or $gender == "Nữ")) $valid = false;
                } else {
                    $valid = false;
                }
                if ($valid) {
                    $signup = $this->model("SignupModel");
                    $result = $signup->signup($username, $name, $email, $password, $dob, $gender, $phone);
                    if ($result) {
                        $_SESSION["username"] = $username;
                        echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/home">';
                    }
                }
            }
        }
    }
?>