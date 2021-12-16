<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        //load the Product Model
        $this->load->model('ProductsModel', 'products');
        $this->load->library('parser');
    }

    public function index() {
        $page['page'] = 'products';
        $this->load->view('head');
        $data['products'] = $this->products->getProducts();
        for ($i=0; $i < count($data['products']); $i++) {
            $data['products'][$i]['pid'] = $i+1;
            $data['products'][$i]['pad'] = str_pad($data['products'][$i]['build_id'],4, "0", STR_PAD_LEFT);
            if ($i % 2 == 0) {
                $data['products'][$i]['index'] = 'odd';
                $data['products'][$i]['reverse'] = 'reverse';
            }else {
                $data['products'][$i]['index'] = 'even';
                $data['products'][$i]['reverse'] = '';
            }
            if (strlen($data['products'][$i]['build_name']) > 10) {
                $data['products'][$i]['responsivefont'] = 'responsivesize50font';
            }else{
                $data['products'][$i]['responsivefont'] = '';
            }
        }
        $this->parser->parse('products', $data);
        $this->load->view('foot',$page);
    }

    public function getDetail(){
        $page['page'] = 'product';
        $id = $this->input->get('id');
        $this->load->view('head');
        $data = $this->products->getDetail($id)[0];
        $data['pad'] = str_pad($id,4, "0", STR_PAD_LEFT);
        $data['imglength'] = (count(scandir('./assets/img/builds/'.str_pad($id,4,'0',STR_PAD_LEFT))))/2-1;
        $this->parser->parse('product', $data);
        $this->load->view('foot',$page);
    }

    public function viewLimitedEdition(){
        $page['page'] = 'limitedproducts';
        $this->load->view('head');
        $data['products'] = $this->products->getLimitedProducts();
        for ($i=0; $i < count($data['products']); $i++) {
            $data['products'][$i]['pid'] = $i+1;
            $data['products'][$i]['limited_id'] = ($i+1)%5;
            $data['products'][$i]['pad'] = str_pad($data['products'][$i]['build_id'],4, "0", STR_PAD_LEFT);
            if ($i % 2 == 0) {
                $data['products'][$i]['index'] = 'odd';
                $data['products'][$i]['reverse'] = 'reverse';
            }else {
                $data['products'][$i]['index'] = 'even';
                $data['products'][$i]['reverse'] = '';
            }
            if (strlen($data['products'][$i]['build_name']) > 10) {
                $data['products'][$i]['responsivefont'] = 'responsivesize50font';
            }else{
                $data['products'][$i]['responsivefont'] = '';
            }
        }
        $this->parser->parse('limitedproduct',$data);
        $this->load->view('foot',$page);
    }
}
