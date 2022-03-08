<?php
    class UpdatePostModel extends DB {

        public function getPostId($id){
            $query = "SELECT * FROM posts WHERE id = '$id';";
            return mysqli_query($this->con, $query);
        }

        public function updatePost($id, $title, $SEOkey, $description, $content, $image) {
            $query = "UPDATE posts SET title = '$title', SEOkey = '$SEOkey', description = '$description', content = '$content', image = '$image' WHERE id = '$id';";
            mysqli_query($this->con, $query);
        }
    }
?>