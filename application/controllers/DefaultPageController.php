<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DefaultPageController extends CI_Controller {

    public function resolveView($page = "index") {
    	$this->load->helper('language');
		$this->lang->load('en_lang');
        $this->checkPageExistence($page);
        $this->load->view('pages/' . $page . '.php');
    }

    private function checkPageExistence($page) {
        if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {
            $this->load->helper('url');
            redirect();
        }
    }
}