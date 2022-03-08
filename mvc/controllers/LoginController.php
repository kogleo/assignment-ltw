<?php
    class LoginController extends Controller {
        function Show() {
            $intro = $this->model("IntroModel");
            $this->view("login", ["LogoTitle"=>$intro->getLogo()]);
            if (isset($_POST["submit"])) {
                $login = $this->model("LoginModel"); 
                $username = $_POST["username"];
                $password = $_POST["password"];
                $result = $login->verifyLogin($username, $password);
                if ($result) {
                    $_SESSION["username"] = $username;
                    if (isset($_POST["remember"])) {
                        setcookie("username", $username, time() + 86400 * 30, "/");
                        setcookie("password", $password, time() + 86400 * 30, "/");
                    }
                    header("Location: http://localhost/LT_Web/home");
                }
            }
        }
        function Logout() {
            unset($_SESSION["username"]);
            header("Location: http://localhost/LT_Web/home");
        }
    }
?>