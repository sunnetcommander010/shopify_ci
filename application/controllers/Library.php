<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {

    public function index() {
        $this->load->view('header');
        $filelist = getDirContents("./uploads");
        $logged_in = $this->session->userdata('logged_in');
        $is_admin = $this->session->userdata('is_admin');
        $payload["isLogined"] = $logged_in;
        $payload["isAdmin"] = $is_admin;
        $payload["filelist"] = $filelist;
        $this->load->view('library', $payload);
        $this->load->view('footer');
    }

    public function viewfile(){
        $fname = $this->uri->segment(3);
        $tofile= realpath("uploads/".$fname.".pdf");
        header('Content-Type: application/pdf');
        readfile($tofile);
    }
}

function getDirContents($dir, &$results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $temparray['name'] = str_replace(".pdf", "", $value);
            $tempa = explode('\\uploads\\', $path)[1];
            $temparray['directory'] = str_replace(".pdf", "", $tempa);
            $results[] = $temparray;
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
        }
    }

    return $results;
}
