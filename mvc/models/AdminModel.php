<?php
    class AdminModel extends DB {
        // CONTACTS
        public function getContacts() {
            $query = "SELECT * FROM contacts";
            return mysqli_query($this->con, $query);
        }
        
        public function editContacts($address, $phone, $mail) {
            $query = "UPDATE contacts SET address = '$address', phone = '$phone', mail = '$mail' WHERE id = 1;";
            mysqli_query($this->con, $query);
        }

        // PRODUCTS
        public function getProducts() {
            $query = "SELECT * FROM products";
            return mysqli_query($this->con, $query);
        }
        
        public function deleteProduct($id){
            $query = "DELETE FROM products WHERE id = $id;";
            mysqli_query($this->con, $query);
        }
        
        // POSTS
        public function getPosts(){
            $query = "SELECT * FROM posts";
            return mysqli_query($this->con, $query);
        }

        public function deletePost($id){
            $query = "DELETE FROM posts WHERE id = $id;";
            mysqli_query($this->con, $query);
        }

        // MEMBERS
        public function getMember() {
            $query = "SELECT * FROM members ";
            return mysqli_query($this->con, $query);
        }
        public function deleteMember($username){
            $query = "DELETE FROM members WHERE username = '$username';";
            mysqli_query($this->con, $query);
        }
        public function addMember($username, $name, $email, $password, $dob, $gender, $phone, $avatar)
        {
            $query = "INSERT INTO `members`(`username`, `name`, `email`, `password`, `dob`, `gender`, `phone`, `avatar`) VALUES ('$username','$name','$email',$password,'$dob','$gender',$phone,'$avatar');";
            mysqli_query($this->con, $query);
        }

        // COMMENTS
        public function getComment() {
            $query = "SELECT * FROM comments ";
            return mysqli_query($this->con, $query);
        }
        
        public function acceptComment($id) {
            $query = "UPDATE comments SET status = 1 WHERE id = '$id' ";
            return mysqli_query($this->con, $query);
        }
        public function deleteComment($id) {
            $query = "DELETE FROM comments WHERE id = '$id'";
            return mysqli_query($this->con, $query);
        }

        // RESOURCES
        public function getResource() {
            $query = "SELECT * FROM resources";
            return mysqli_query($this->con, $query);
        }
        public function deleteResource($id) {
            $query = "DELETE FROM resources WHERE id = '$id';";
            mysqli_query($this->con, $query);
        }
        public function addResource($type, $name, $content) {
            
            $query = "INSERT INTO `resources`(`type`, `name`, `content`) VALUES ('$type','$name','$content');";
            mysqli_query($this->con, $query);
        }
    }
?>