<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct() {}
    public function postIndex(Request $request) 
    {    
        $this->validate($request, ['numUsers' => 'required|numeric|min:1|max:200']);
        //creates fake information
        $faker = \Faker\Factory::create();
        //get form input fields
        $num_users = \Input::get("numUsers");
        $email = \Input::get("wantsEmail");
        $email = \Input::get("wantsPhone");  
        //creates the users array
        $users = Array();
        
        //add users to array
        for ($i=0; $i < $num_users; $i++) 
        {
            $users[$i] = Array("name" => $faker->firstName);
            $users[$i] = array_merge($users[$i], Array("lastName" => $faker->lastName));
            if ($email) 
            {
                $users[$i] = array_merge($users[$i], Array("email" => $faker->email));
            };
            if ($email) 
            {
                $users[$i] = array_merge($users[$i], Array("phoneNumber" => $faker->phoneNumber));
            };
        }
        return view('usercontroller')->with("users", $users);
        //return $users;
    }

}
