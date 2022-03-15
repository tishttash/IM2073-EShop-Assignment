<?php

//use to fetch product data
class Product_final 
{
    public $db = null;

    public function __construct(DBController_final $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    //fetch product data using getData Method
    public function getData($table = 'cakes') 
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $resultArray = array();

        //fetch product data one by one
        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    
    public function updateData($id)
    {
            //update database after clicking "buy"
            $this->db->con->query("UPDATE cakes SET qty=(qty-1) WHERE id=$id");
            
            // if ($con->query($sql) === TRUE) {
            //     echo "Record updated successfully";
            //   } else {
            //     echo "Error updating record: " . $con->error;
            //   }
    }
}

?>