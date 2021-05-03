<?php
namespace App\Services\Business;

use App\Models\UserModel;
use App\Services\Data\SecurityDAO;
use App\Services\Data\CustomerDAO;

class securityService {

    public function login($firstname, $lastname){
        $customerDAO = new CustomerDAO();
        return $customerDAO->addCustomer($firstname, $lastname);
    }



}