<?php
    class AdminLoginController extends Controller {
        function Show() {
            $this->view("adminLogin", []);
            if (isset($_POST["login"])) {
                $login = $this->model("AdminLoginModel"); 
                $username = $_POST["username"];
                $password = $_POST["password"];
                $result = $login->verifyLogin($username, $password);
                if ($result) {
                    $_SESSION["admin"] = $username;
                    header("Location: http://localhost/LT_Web/admin");
                }
            }
        }
        function LogOut() {
            unset($_SESSION["admin"]);
            header("Location: http://localhost/LT_Web/AdminLogin");
        }
    }
?>