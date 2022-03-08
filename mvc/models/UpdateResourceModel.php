<?php
    class UpdateResourceModel extends DB {

        public function getResourceId($id){
            $query = "SELECT * FROM resources WHERE id = '$id';";
            return mysqli_query($this->con, $query);
        }

        public function updateResource($id, $type, $name, $content) {
            $query = "UPDATE resources SET type = '$type', name = '$name', content = '$content' WHERE id = '$id';";
            mysqli_query($this->con, $query);
        }
    }
?>