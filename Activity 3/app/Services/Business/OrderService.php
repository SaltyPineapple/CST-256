<?php
namespace App\Services\Business;
use App\Services\Data\CustomerDAO;
use App\Services\Data\OrderDAO;

class OrderService{
    public function createOrder($firstName, $lastName, $product){
        $con = mysqli_connect('localhost', 'root', 'root', 'cs256Activities');
        
        if(!$con){
            die("Database not connected" . mysqli_connect_error);
        }

        $orderDAO = new OrderDAO($con);
        $customerDAO = new CustomerDAO($con);

        myslqi::begin_transaction();
        if($customerDAO->addCustomer($firstName, $lastName) && $orderDAO->addOrder($product)){
            mysqli::commit();
        }
        else{
            mysqli::rollback();
        }




    }
}