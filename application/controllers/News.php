<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {

    public function index()
    {
        //$this->load->view('news');
        $this->data['pagebody'] = 'news';
        $this->data['hnav_news'] = 'class="selected"';
        $this->data['fnav_news'] = 'class="active"';
        $this->data['curpage'] = 'News - ';
        $this->render();
    }
}