<?php
    class ContactController extends Controller {
        function Show() {
            $intro = $this->model("IntroModel");
            $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
            $contact = $this->model('ContactModel');
            $this->view("content", ["Page"=>"contact", "contact"=>$contact->getContact()]);
            $this->view("footer", ["Contact"=>$intro->getContact()]);
        }
    }
?>