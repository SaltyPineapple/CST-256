<?php

namespace App\Services\Data;

class OrderDAO{

    private $con;

    public function __construct($con){
        $this->con = $con;
    }

    public function addOrder($product){
        $sql = "INSERT INTO ORDERS (PRODUCT) values ($product)";
        $stmt = $con->prepare($sql);

        // Execute and return boolean
        if ($stmt->execute()) {
            return true;
        }
        else
        {
            return false;
        }





    }

}


