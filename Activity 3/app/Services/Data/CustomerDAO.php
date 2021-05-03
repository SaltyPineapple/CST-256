<?php

namespace App\Services\Data;

class CustomerDAO {
    
    private $con;

    public function __construct($con){
        $this->con = $con;
    }

    public function addCustomer($firstName, $lastName){
        $sql_query = "Insert into customers (FirstName, LastName) values ($firstName, $lastName)";
        $stmt = $con->prepare($sql_query);
        
        //$stmt->bind_param("ss", $firstName, $lastName);

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