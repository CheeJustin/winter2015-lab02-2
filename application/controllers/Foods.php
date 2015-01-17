<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Foods extends CI_Controller {

    public function index()
    {
        $this->load->view('foods');
    }
}