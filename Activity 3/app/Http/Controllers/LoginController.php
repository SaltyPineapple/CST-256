<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usermodel;
use App\Services\Business\SecurityService;


class LoginController extends Controller
{
    
    public function index(Request $request){
        $securityService = new SecurityService();
        
        $this->validateForm($request);
        
        $name = $request->input('name');
        $password = $request->input('password');


        $isUser = $securityService->login($name, $password);
        return $isUser;
        

        
    }



    public function validateForm(Request $request){
        $rules = ['name' => 'Required|Between:4,10|Alpha', 'password' => 'Required|Between:4,10'];

        $this->validate($request,$rules);
    }


}
