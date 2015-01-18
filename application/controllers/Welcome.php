<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

    public function index()
    {
        //$this->load->view('welcome');
        $this->data['pagebody'] = 'welcome';
        $this->data['hnav_home'] = 'class="selected"';
        $this->data['fnav_home'] = 'class="active"';
        $this->data['curpage'] = '';
        $this->render();
    }
}