<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

    public function index()
    {
        //$this->load->view('contact');
        $this->data['pagebody'] = 'contact';
        $this->data['hnav_contact'] = 'class="selected"';
        $this->data['fnav_contact'] = 'class="active"';
        $this->data['curpage'] = 'Contact - ';
        $this->render();
    }
}