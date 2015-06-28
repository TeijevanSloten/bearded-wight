<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DefaultPageController extends CI_Controller {

    public function resolveView($page = "index") {
        $this->load->library('session');

        if ($this->session->site_lang != null) {
            $this->lang->load($this->session->site_lang.'_lang', $this->session->site_lang);
        } else {
            $this->session->set_userdata('site_lang', 'english');
            $this->lang->load('english_lang');
        }

        $this->checkPageExistence($page);
        $this->load->view('pages/' . $page . '.php');
    }

    private function checkPageExistence($page) {
        if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {
            $this->load->helper('url');
            redirect();
        }
    }

    public function switchLanguage($language = "english") {
        $this->load->library('session');
        $this->load->helper('url');
        $this->session->set_userdata('site_lang', $language);
        redirect(base_url());
    }

}