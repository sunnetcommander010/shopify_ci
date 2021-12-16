<?php

defined('BASEPATH') OR exit('No direct script access allowed');
function getDirContents($dir, &$results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $temparray['name'] = str_replace(".pdf", "", $value);
            $temparray['directory'] = $path;
            $results[] = $temparray;
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
        }
    }

    return $results;
}

class Dashboard extends CI_Controller {
    
    public function index() {
        $this->load->view('header');
        $filelist = getDirContents("./uploads");
        $logged_in = $this->session->userdata('logged_in');
        $is_admin = $this->session->userdata('is_admin');
        $payload["isLogined"] = $logged_in;
        $payload["isAdmin"] = $is_admin;
        $payload["filelist"] = $filelist;
        $payload["search"] = "";

        $this->load->view('dashboard', $payload);
        $this->load->view('footer');
    }

    public function uploads() {
        $logged_in = $this->session->userdata('logged_in');
        $this->load->view('header');
        if($logged_in)
            $this->load->view('uploads');
        else
            $this->load->view('login_page');
        $this->load->view('footer');    
    }

    public function user_roles() {
        $this->load->view('header');
        $logged_in = $this->session->userdata('logged_in');
        $is_admin = $this->session->userdata('is_admin');
        if($logged_in && $is_admin)
            $this->load->view('user_roles');
        else
            $this->load->view('login_page');
        $this->load->view('footer');
    }

    public function remove_file() {
        $logged_in = $this->session->userdata('logged_in');
        $is_admin = $this->session->userdata('is_admin');
        if($logged_in && $is_admin)
        {
            $name= $this->input->post('name');

            if(unlink("./uploads/".$name))
                echo "SUCCESS";
            else
                echo "FAILED";
        }
    }
    public function upload()
    {
        if($_FILES["files"]["name"] != '')
        {
            $output = '';
            for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
            {
                $destFolder = './uploads/'.$_POST["folder_name".$count].'/';
                $config["upload_path"] = $destFolder;
                if (!file_exists($destFolder))
                    mkdir($destFolder, 0777, true);
                $config["allowed_types"] = 'pdf';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $_FILES["file"]["name"] = $_FILES["files"]["name"][$count];
                $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
                $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
                $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
                $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];
                if($this->upload->do_upload('file'))
                {
                    $data = $this->upload->data();
                }
            }
            echo "SUCCESS";   
        }
    }
}