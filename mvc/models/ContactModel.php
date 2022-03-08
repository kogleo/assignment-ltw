<?php
    class ContactModel extends DB {

        public function getContact() {
            $query = "SELECT * FROM contacts WHERE id = 1";
            return mysqli_query($this->con, $query);
        }
    }
?>