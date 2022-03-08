<?php
    class AddPostController extends Controller {
        function Show() {     
            $addPost = $this->model('AddPostModel');       
            $this->view("addPost", []);
            
            if(isset($_POST['postAdd'])) {
                $title = $_POST['title'];
                $SEOkey = $_POST['SEOkey'];
                $description = $_POST['description'];
                $content = $_POST['content'];
                $image = $_POST['image'];
                // echo "<script>console.log(\"Debug Objects: " . $content . " \" );</script>";
                if(strlen($title) > 0 && strlen($SEOkey) > 0 && strlen($description) > 0 && strlen($content) > 0) {
                    $addPost->addPost($title, $SEOkey, $description, $content, $image);
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
                }
                else echo   '<div class="text-danger text-center">
                                <strong>Invalid input!</strong>
                            </div>';
            }
        }
    }
?>