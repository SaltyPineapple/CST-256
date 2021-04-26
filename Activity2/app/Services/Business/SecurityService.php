<?php
namespace App\Services\Business;

use App\Models\UserModel;
use App\Services\Data\SecurityDAO;

class securityService {

    public function login(Usermodel $usermodel){
        $securityDAO = new securityDAO();
        return $securityDAO->findByUser($usermodel);
    }

}