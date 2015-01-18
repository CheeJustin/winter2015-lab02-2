<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

    public function index()
    {
        //$this->load->view('about');
        $this->data['pagebody'] = 'about';
        $this->data['hnav_about'] = 'class="selected"';
        $this->data['fnav_about'] = 'class="active"';
        $this->data['curpage'] = 'About - ';
        $this->render();
    }
}