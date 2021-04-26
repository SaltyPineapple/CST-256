<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsMyNameController extends Controller
{
    public function index(Request $request){

        $firstName = $request->input('firstname');
        $lastName = $request->input('lastname');
        echo "Your name is: " . $firstName . " " . $lastName;
        echo '<br>';


        // Usage of path method
        $path = $request->path();
        echo 'Path Method: '.$path;
        echo'<br>';

        // Usage of is method
        $method = $request->isMethod('get') ? "GET":"POST";
        echo 'GET or POST Method: '.$method;
        echo '<br>';

        // Usage of URL method
        $url = $request->url();
        echo "URL Method: ".$url;
        echo '<br>';

        $data = ['firstName' => $firstName, 'lastName' => $lastName];
        return view('thatswhoami')->with($data);


    }



}
