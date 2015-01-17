<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dives extends MY_Controller {

    public function index()
    {
        //$this->load->view('dives');
        $this->data['pagebody'] = 'dives';
        $this->render();
    }
}