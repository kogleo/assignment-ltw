<?php
    class AccountController extends Controller {
        function Show() {
            if (isset($_SESSION["username"])) {
                $account = $this->model("AccountModel");
                $intro = $this->model("IntroModel");
                $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
                $this->view("content", ["Page"=>"account",
                                        "Account"=>$account->getInfo()]);
                $this->view("footer", ["Contact"=>$intro->getContact()]);
                if (isset($_POST["updateInfo"])) {
                    $name = $_POST["name"];
                    $dob = $_POST["dob"];
                    $gender = $_POST["gender"];
                    $phone = $_POST["phone"];
                    $email = $_POST["email"];
                    $account->updateInfo($name, $dob, $gender, $phone, $email);
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/Account">';
                }
                if (isset($_POST["changePassword"])) {
                    $password = $_POST["password"];
                    $rePassword = $_POST["rePassword"];
                    if (!(empty($password) or empty($rePassword))) {
                        if ($password == $rePassword) {
                            $account->changePassword($password);
                        }
                        else
                        {
                            echo "<script type='text/javascript'>alert('Mật khẩu không trùng khớp');</script>";
                        }
                    }
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/Account">';
                }
                if (isset($_POST["changeAvatar"])) {
                    $file = $_FILES["avatar"];
                    if (!is_dir("./uploads/" . $_SESSION["username"])) {
                        mkdir("./uploads/" . $_SESSION["username"]);
                    }
                    $path = "./uploads/" . $_SESSION["username"] . "/".  $file["name"];
                    move_uploaded_file($file["tmp_name"], $path);
                    $account->changeAvatar($path);
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/Account">';
                }
            } else {
                header("Location: http://localhost/LT_Web/Login");
            }
        }
    }
?>