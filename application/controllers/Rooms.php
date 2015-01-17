<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rooms extends MY_Controller {

    public function index()
    {
        //$this->load->view('rooms');
        $this->data['pagebody'] = 'rooms';
        $this->render();
    }
}