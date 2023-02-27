<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\CrudModel;

class MainController extends BaseController
{
    // Session
    protected $session;
    // Data
    protected $data;
    // Model
    protected $crud_model;


    // Initialize Objects
    public function __construct() {
        $this->crud_model = new CrudModel();
        $this->session = \Config\Services::session();
        $this->data['session'] = $this->session;
    }
    
    // Home Page
    public function index() {
        $this->data['page_title'] = "Home Page";
        echo view('templates/header',$this->data);
    }

   
}
