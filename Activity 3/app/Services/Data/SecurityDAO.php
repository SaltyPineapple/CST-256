<?php
namespace App\Services\Data;

use App\Models\Usermodel;

class SecurityDAO{

    public function findByUser(Usermodel $usermodel){
        $con = mysqli_connect('localhost', 'root', 'root', 'CS256Activities');
        
        if(!$con){
            die("Database not connected" . mysqli_connect_error);
        }
        
        $username = $usermodel->getUsername();
        $password = $usermodel->getPassword();

        // Prepare SQL String and bind parameters
        $sql_query = "SELECT * FROM activity3 WHERE USERNAME LIKE ? AND PASSWORD LIKE ?";
        $stmt = $con->prepare($sql_query);
        $stmt->bind_param("ss", $username, $password);

        // Execute statement and get results.
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            return true;
        }
        else{
            return false;
        }

    }


    public function login(Usermodel $usermodel){
        $con = mysqli_connect('localhost', 'root', 'root', 'CS256Activities');
        
        if(!$con){
            die("Database not connected" . mysqli_connect_error);
        }
        
        $username = $usermodel->getUsername();
        $password = $usermodel->getPassword();

        $sql = "INSERT INTO customers (FIRSTNAME, LASTNAME) values (?,?)";
        $stmt = $con->prepare($sql);

        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();


    }


}