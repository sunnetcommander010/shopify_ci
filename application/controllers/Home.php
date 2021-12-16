<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $page['page'] = 'home';
        $this->load->view('headhome');
        // $filelist = getDirContents("./uploads");
        // $logged_in = $this->session->userdata('logged_in');
        // $is_admin = $this->session->userdata('is_admin');
        // $payload["isLogined"] = $logged_in;
        // $payload["isAdmin"] = $is_admin;
        // $payload["filelist"] = $filelist;
        // $this->load->view('library', $payload);
        if (!isset($_SESSION['total_cart'])) {
            $_SESSION['total_cart'] = 0;
        }       
        $this->load->view('home');
        $this->load->view('foot',$page);
    }
}
