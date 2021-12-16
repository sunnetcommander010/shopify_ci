<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Component extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        //load the Product Model
        $this->load->model('ComponentModel', 'component');
        $this->load->library('parser');
    }

    public function index() {
        $component_type = $this->input->get('component_type');
        $this->load->view('admin/head');
        $data['components'] = $this->component->getComponents($component_type);
        for ($i=0; $i < count($data['components']); $i++) { 
            $data['components'][$i]['pad'] = str_pad($i+1,4, "0", STR_PAD_LEFT);
            switch ($data['components'][$i]['component_type']) {
                case '2':
                    $data['components'][$i]['c_color'] = '#FF3322';
                    break;
                case '3':
                    $data['components'][$i]['c_color'] = 'rgba(0, 144, 255, 1)';
                    break;
                case '4':
                    $data['components'][$i]['c_color'] = 'rgba(151, 13, 105, 0.822)';
                    break;
                case '5':
                    $data['components'][$i]['c_color'] = '#cf5915d2';
                    break;
                case '6':
                    $data['components'][$i]['c_color'] = '#19d400d2';
                    break;
                case '7':
                    $data['components'][$i]['c_color'] = '#1da5aad2';
                    break;
                case '9':
                    $data['components'][$i]['c_color'] = '#f55a00d2';
                    break;
                case '10':
                    $data['components'][$i]['c_color'] = '#FF3322';
                    break;
                default:
                    $data['components'][$i]['c_color'] = '';
                    break;
            }
        }
        $this->parser->parse('admin/components', $data);
        $this->load->view('admin/foot');
    }

    public function editComponent(){
        $id = $this->input->get('id');
        $this->load->view('admin/head');
        $data = $this->component->editComponent($id)[0];
        $this->parser->parse('admin/editcomponent', $data);
        $this->load->view('admin/foot');
    }

    public function saveComponent() {
        $param = $this->input->post();
        $this->component->saveComponent($param);
    }

    public function addViewComponent() {
        $this->load->view('admin/head');
        $this->load->view('admin/addcomponent');
        $this->load->view('admin/foot');
    }

    public function addComponent() {
        $param = $this->input->post();
        $this->component->addComponent($param);
    }

    public function deleteComponent(){
        $id = $this->input->get('id');
        return $this->component->deleteComponent($id);
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
