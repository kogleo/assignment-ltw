<?php
    class UpdatePostController extends Controller {
        function Show() {     
            $updatePost = $this->model('UpdatePostModel');   
            $postId = "";
            if (isset($_POST['id'])) {
                $postId = $_POST['id'];
            } else {
                echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
            } 
            $intro = $this->model("IntroModel");
            $this->view("updatePost", [
                'PostId'=>$updatePost->getPostId($postId), "LogoTitle"=>$intro->getLogo()
            ]);
            
            if(isset($_POST['postUpdate'])) {
                $id = $_POST['id'];
                $title = $_POST['title'];
                $SEOkey = $_POST['SEOkey'];
                $description = $_POST['description'];
                $content = $_POST['content'];
                $image = $_POST['image'];
                // echo "<script>console.log(\"Debug Objects: " . $content . " \" );</script>";
                if(strlen($title) > 0 && strlen($SEOkey) > 0 && strlen($description) > 0 && strlen($content) > 0) {
                    $updatePost->updatePost($id, $title, $SEOkey, $description, $content, $image);
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
                }
                else echo   '<div class="text-danger text-center">
                                <strong>Invalid input!</strong>
                            </div>';
            }
        }
    }
?>