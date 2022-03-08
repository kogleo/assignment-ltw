<?php
    class UpdateResourceController extends Controller {
        function Show() {     
            $updateResource = $this->model('UpdateResourceModel');   
            $resourceId = "";
            if (isset($_POST['id'])) {
                $resourceId = $_POST['id'];
            } else {
                echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
            } 
            $intro = $this->model("IntroModel");
            $this->view("updateResource", [
                'PostId'=>$updateResource->getResourceId($resourceId), "LogoTitle"=>$intro->getLogo()
            ]);
            if(isset($_POST['resourceUpdate'])) {
                $id = $_POST['id'];
                $type = $_POST['type'];
                $name = $_POST['name'];
                $content = $_POST['content'];
                
                $updateResource->updateResource($id, $type, $name, $content);
                echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
            }
        }
    }
?>