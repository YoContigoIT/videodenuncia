<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = array();
        $this->_loadView( 'Servicio',$data,'home_view');
    }

    private function _loadView($title,$data,$view){

        $header_data =[
            'title' => $title
        ];

        echo view("templates/header",$header_data);
        echo view("$view",$data);
        echo view("templates/footer");
    }
}
