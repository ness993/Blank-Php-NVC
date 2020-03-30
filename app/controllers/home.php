<?php

class Home extends Controller
{
   
    public function index($name="")
    {
        $user = $this->model('User');
        $user->name=$name;
        echo $user->name;
    }
    #stao si na 7 of 9
    
}