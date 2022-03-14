<?php

    class Update 
    {
        public function __construct(DBController $db)
        {
            if (!isset($db->con)) return null;
            $this->db = $db;
        }

        public function updateData($id)
        {
            //update database after clicking "buy"
            $sql = "UPDATE cakes SET qty=(qty-1) WHERE id=$id";
            
            if ($con->query($sql) === TRUE) {
                echo "Record updated successfully";
              } else {
                echo "Error updating record: " . $con->error;
              }
        }
    }

?>