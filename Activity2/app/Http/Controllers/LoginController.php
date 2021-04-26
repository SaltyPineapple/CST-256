<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usermodel;
use App\Services\Business\SecurityService;


class LoginController extends Controller
{
    
    public function index(Request $request){
        $securityService = new SecurityService();
        $name = $request->input('name');
        $password = $request->input('password');

        $user = new Usermodel($name, $password);
        $isUser = $securityService->login($user);

        if($isUser){
            return view('loginPassedV2');
        }
        else{
            return view('loginFailed');
        }

        echo "Your name is: " . $name;
        echo "<br>";
        echo "Your password is: " . $password;
        echo '<br>';
    }


}
