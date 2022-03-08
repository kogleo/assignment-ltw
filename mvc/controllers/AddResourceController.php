<?php
    class AddResourceController extends Controller {
        function Show() {
            $resource = $this->model('AdminModel');  
            $this->view("addResource", []);
            if(isset($_POST['addResource'])) {
                
                $type = $_POST['type'];
                $name = $_POST['name'];
                $content = $_POST['content'];
                
                $resource->addResource($type, $name, $content);
                echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
            }
        }
    }
?>