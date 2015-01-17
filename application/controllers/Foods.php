<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Foods extends MY_Controller {

    public function index()
    {
        //$this->load->view('foods');
        $this->data['pagebody'] = 'foods';
        $this->render();
    }
}