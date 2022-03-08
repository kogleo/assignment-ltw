<?php
    class NewsModel extends DB {

        public function getTitles() {
            $query = "SELECT title, id FROM posts";
            return mysqli_query($this->con, $query);
        }
        public function getPosts() {
            $query = "SELECT * FROM posts";
            return mysqli_query($this->con, $query);
        }
        public function getPostId($postId) {
            $query = "SELECT * FROM posts WHERE id = '$postId'";
            return mysqli_query($this->con, $query);
        }
        public function getComments($postId) {
            $query = "SELECT * FROM comments c, members m WHERE postId = '$postId' and c.username = m.username and status = 1";
            return mysqli_query($this->con, $query);
        }
        public function addComment($username, $postId, $content) {
            $time = date("Y-m-d H:i:s");
            $query = "INSERT INTO comments(username, postId, content, time) VALUES ('$username', '$postId', '$content', '$time')";
            return mysqli_query($this->con, $query);
        }
    }
?>