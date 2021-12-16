<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        //load the Product Model
        $this->load->library('session');
        $this->load->model('BuildsModel', 'builds');
        $this->load->library('parser');
    }

    public function index() {
        $page['page'] = 'cartpage';
        $this->load->view('head');
        $data['carts'] = $this->builds->getCarts();
        $data['total_price'] = 0;
        $data1['total_cart'] = 0;
        for ($i=0; $i < count($data['carts']); $i++) { 
            $data['carts'][$i]['pad'] = str_pad($data['carts'][$i]['build_id'],4,'0',STR_PAD_LEFT);
            $data['total_price'] += $data['carts'][$i]['cart'] * $data['carts'][$i]['build_price'];
            $data1['total_cart'] += $data['carts'][$i]['cart'];
        }
        $_SESSION['total_cart'] = $data1['total_cart'];
        $this->parser->parse('cart', $data);
        $this->load->view('foot',$page);
    }

    // public function addCart() {
    //     $_SESSION['total_cart'] += 1;
    //     $build_id = $this->input->get('build_id');
    //     $this->builds->addCart($build_id);
    // }

    // public function deleteCart() {
    //     $build_id = $this->input->get('build_id');
    //     $cart = $this->input->get('cart');
    //     $_SESSION['total_cart'] -= $cart;
    //     $this->builds->deleteCart($build_id);
    // }

    public function makeCheckout() {
        $param = $this->input->post('param');
        $url = 'https://cgc-computers.myshopify.com/api/2021-07/graphql.json';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $param);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/graphql','X-Shopify-Storefront-Access-Token:3198faa8ef5543ea4cfb32cbda6ce310'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($result, true);
        $response['success'] = $data['data']['checkoutCreate']['checkout']['webUrl'];
        echo json_encode($response);
    }
}