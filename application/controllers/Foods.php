<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Foods extends MY_Controller {

    public function index()
    {
        //$this->load->view('foods');
        $this->data['pagebody'] = 'foods';
        $this->data['hnav_foods'] = 'class="selected"';
        $this->data['fnav_foods'] = 'class="active"';
        $this->data['curpage'] = 'Foods - ';
        $this->render();
    }
}