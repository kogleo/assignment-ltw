<?php
    class IntroController extends Controller {
        function Show() {
            $intro = $this->model("IntroModel");
            $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
            $this->view("content", ["Page"=>"intro", "Benefit"=>$intro->customerBenefits(), "Saving"=>$intro->costSavings()
                                    , "Care"=>$intro->customerCare(), "Warranty"=>$intro->warrantyService()
                                    , "Quality"=>$intro->internationalQuality(), "Maintenance"=>$intro->maintenance()
                                    , "Logo"=>$intro->getLogo()]);
            $this->view("footer", ["Contact"=>$intro->getContact()]);
        }
    }
?>