<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rooms extends MY_Controller {

    public function index()
    {
        //$this->load->view('rooms');
        $this->data['pagebody'] = 'rooms';
        $this->data['hnav_rooms'] = 'class="selected"';
        $this->data['fnav_rooms'] = 'class="active"';
        $this->data['curpage'] = 'Rooms - ';
        $this->render();
    }
}