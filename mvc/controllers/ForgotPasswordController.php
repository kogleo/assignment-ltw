<?php
    class ForgotPasswordController extends Controller {
        function Show() {
            $intro = $this->model("IntroModel");
            $this->view("forgotPassword", ["LogoTitle"=>$intro->getLogo()]);
        }
    }
?>