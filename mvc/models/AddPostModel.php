<?php
    class AddPostModel extends DB {
        public function addPost($title, $SEOkey, $description, $content, $image) {
            $query = "INSERT INTO posts(title, description, content, SEOkey, image) values('$title', '$description', '$content', '$SEOkey', '$image');";
            // echo "<script>console.log(\"Debug Objects: " . $query . " \" );</script>";
            mysqli_query($this->con, $query);
        }
    }
?>