<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view(){
        return view('welcome_message');
    }

    public function adduser(){
        return view('adduser');
    }

    public function saveformdata(){
        $data=$_POST;
        $homeModelObj=new HomeModel();
        $homeModelObj->setData("user",$data);
    }

    public function getFormData(){
        $homeModelObj=new HomeModel();
        $data = $homeModelObj->getData("user");
        $json_data['data'] = $data;
        echo json_encode($json_data);
    
        return $data;
    }
}
