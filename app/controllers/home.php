<?php

class Home extends Controller
{
   


    public function index($name="")
    {
        
        $this->view('home/index', ['name' =>$user->name]);
    }
   
    public function create($username ='', $email='')
    {
        User::create([
            'username' =>$username,
            'email' => $email
        ]);
    }
}