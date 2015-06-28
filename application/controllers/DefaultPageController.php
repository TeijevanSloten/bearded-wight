<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DefaultPageController extends CI_Controller {

    public function index() {
        $this->load->view('pages/index.php');
    }

    public function resolveView($page = "index") {
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