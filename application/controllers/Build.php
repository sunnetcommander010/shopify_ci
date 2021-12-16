<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Build extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        //load the Product Model
        $this->load->model('BuildsModel', 'builds');
        $this->load->model('ComponentModel', 'component');
        $this->load->library('parser');
    }

    public function index() {
        $this->load->view('admin/head');
        $data['builds'] = $this->builds->getBuilds();
        for ($i=0; $i < count($data['builds']); $i++) { 
            $data['builds'][$i]['pad'] = str_pad($data['builds'][$i]['build_id'],4,'0',STR_PAD_LEFT);
            if($data['builds'][$i]['build_isActive']){
                $data['builds'][$i]['badge'] = 'success';
                $data['builds'][$i]['isActive_html'] = 'active';
            }else {
                $data['builds'][$i]['badge'] = 'danger';
                $data['builds'][$i]['isActive_html'] = 'inactive';
            }
        }
        $this->parser->parse('admin/builds',$data);
        $this->load->view('admin/foot');
    }

    public function addshoifyproduct($title, $price, $img) {
        $url = 'https://691544a4514741b5bdcc55514799bf7b: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@cgc-computers.myshopify.com/admin/api/2021-07/products.json';
        $curl = curl_init($url);
        $data['product'] = [
            'title'=>$title, 
            'body_html'=>'<strong>Good snowboard!</strong>',
            'product_type' => 'gaming computer',
            "vendor"=> "cgc-computer",
            "published"=> true,
            'published_scope' => 'global',
            "status"=> "active",
            "variant"=> [
                  "price" => $price,
                  "inventory_management"=> "shopify",
                  "inventory_quantity" => 1000,
            ],
            "images" => [[
                "attachment"=> $img,
            ],]
        ];
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);
        if ($result === "Bad Request") {
            return false;
        }else{
            return $result;
        }
    }

    public function editshoifyproduct($product_id, $title, $price, $variant_id, $img) {
        $url = 'https://691544a4514741b5bdcc55514799bf7b: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@cgc-computers.myshopify.com/admin/api/2021-07/products/'.$product_id.'.json';
        $curl = curl_init($url);
        if ($img == '000') {
            $data['product'] = [
                'id'=>$product_id,
                'title'=>$title, 
                "published"=> true,
                'published_scope' => 'global',
                "status"=> "active",
                "variant"=> [
                      "id" => $variant_id,
                      "price" => $price,
                      "inventory_management"=> "shopify",
                      "inventory_quantity" => 1000,
                ]
            ];
        }else{
            $data['product'] = [
                'id'=>$product_id,
                'title'=>$title, 
                "published"=> true,
                'published_scope' => 'global',
                "status"=> "active",
                "variant"=> [
                      "id" => $variant_id,
                      "price" => $price,
                      "inventory_management"=> "shopify",
                      "inventory_quantity" => 1000,
                ],
                "images" => [[
                    "attachment"=> $img,
                ],]
            ];
        }
        // curl_setopt_array($curl, array(
		//     CURLOPT_URL => $url,
		//     CURLOPT_RETURNTRANSFER => true,
		//     CURLOPT_ENCODING => "",
		//     CURLOPT_TIMEOUT => 30000,
		//     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		//     CURLOPT_CUSTOMREQUEST => "GET",
		//     CURLOPT_HTTPHEADER => array(
		//     	// Set Here Your Requesred Headers
		//         'Content-Type: application/json',
		//     ),
		// ));
        
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);
        if ($result === "Bad Request") {
            return false;
        }else{
            return $result;
        }
    }

    public function addshoifyproductgraphql($id) {
        $url = 'https://691544a4514741b5bdcc55514799bf7b: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@cgc-computers.myshopify.com/admin/api/2019-07/graphql.json';
        $curl = curl_init($url);
        $data = '{ productVariant (id: "gid://shopify/ProductVariant/'.$id.'") { storefrontId } }';
        
            
                 
           
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/graphql'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        return $result;
        // curl_close($curl);
        // if ($result === "Bad Request") {
        //     return false;
        // }else{
        //     return $result;
        // }
    }

    public function editBuild(){
        $build_id = $this->input->get('build_id');
        $data = $this->builds->getBuild($build_id)[0];
        $data['img_length'] = (count(scandir('./assets/img/builds/'.str_pad($build_id,4,'0',STR_PAD_LEFT))))/2-1;
        $data['img_url'] = base_url().'../assets/img/builds/'.str_pad($build_id,4, "0", STR_PAD_LEFT).'/';
        $data['build_cpu_component'] = $this->component->getEasyComponents(1);
        for ($i=0; $i < count($data['build_cpu_component']); $i++) { 
            if ($data['build_cpu_component'][$i]['component_id'] == $data['build_cpu']) {
                $data['build_cpu_component'][$i]['selected'] = 'selected';
            }else {
                $data['build_cpu_component'][$i]['selected'] = '';
            }
        }
        $data['build_motherboard_component'] = $this->component->getEasyComponents(2);
        for ($i=0; $i < count($data['build_motherboard_component']); $i++) { 
            if ($data['build_motherboard_component'][$i]['component_id'] == $data['build_motherboard']) {
                $data['build_motherboard_component'][$i]['selected'] = 'selected';
            }else {
                $data['build_motherboard_component'][$i]['selected'] = '';
            }
        }
        $data['build_ram_component'] = $this->component->getEasyComponents(3);
        for ($i=0; $i < count($data['build_ram_component']); $i++) { 
            if ($data['build_ram_component'][$i]['component_id'] == $data['build_ram']) {
                $data['build_ram_component'][$i]['selected'] = 'selected';
            }else {
                $data['build_ram_component'][$i]['selected'] = '';
            }
        }
        $data['build_case_component'] = $this->component->getEasyComponents(4);
        for ($i=0; $i < count($data['build_case_component']); $i++) { 
            if ($data['build_case_component'][$i]['component_id'] == $data['build_case']) {
                $data['build_case_component'][$i]['selected'] = 'selected';
            }else {
                $data['build_case_component'][$i]['selected'] = '';
            }
        }
        $data['build_psu_component'] = $this->component->getEasyComponents(5);
        for ($i=0; $i < count($data['build_psu_component']); $i++) { 
            if ($data['build_psu_component'][$i]['component_id'] == $data['build_psu']) {
                $data['build_psu_component'][$i]['selected'] = 'selected';
            }else {
                $data['build_psu_component'][$i]['selected'] = '';
            }
        }
        $data['build_gpu_component'] = $this->component->getEasyComponents(6);
        for ($i=0; $i < count($data['build_gpu_component']); $i++) { 
            if ($data['build_gpu_component'][$i]['component_id'] == $data['build_gpu']) {
                $data['build_gpu_component'][$i]['selected'] = 'selected';
            }else {
                $data['build_gpu_component'][$i]['selected'] = '';
            }
        }
        $data['build_ssd_component'] = $this->component->getEasyComponents(7);
        for ($i=0; $i < count($data['build_ssd_component']); $i++) { 
            if ($data['build_ssd_component'][$i]['component_id'] == $data['build_ssd']) {
                $data['build_ssd_component'][$i]['selected'] = 'selected';
            }else {
                $data['build_ssd_component'][$i]['selected'] = '';
            }
        }
        $data['build_hdd_component'] = $this->component->getEasyComponents(8);
        for ($i=0; $i < count($data['build_hdd_component']); $i++) { 
            if ($data['build_hdd_component'][$i]['component_id'] == $data['build_hdd']) {
                $data['build_hdd_component'][$i]['selected'] = 'selected';
            }else {
                $data['build_hdd_component'][$i]['selected'] = '';
            }
        }
        $data['build_soft_component'] = $this->component->getEasyComponents(9);
        for ($i=0; $i < count($data['build_soft_component']); $i++) { 
            if ($data['build_soft_component'][$i]['component_id'] == $data['build_soft']) {
                $data['build_soft_component'][$i]['selected'] = 'selected';
            }else {
                $data['build_soft_component'][$i]['selected'] = '';
            }
        }
        $data['build_acce_component'] = $this->component->getEasyComponents(10);
        for ($i=0; $i < count($data['build_acce_component']); $i++) { 
            if ($data['build_acce_component'][$i]['component_id'] == $data['build_acce']) {
                $data['build_acce_component'][$i]['selected'] = 'selected';
            }else {
                $data['build_acce_component'][$i]['selected'] = '';
            }
        }
        $data['build_warranty_component'] = $this->component->getEasyComponents(11);
        for ($i=0; $i < count($data['build_warranty_component']); $i++) { 
            if ($data['build_warranty_component'][$i]['component_id'] == $data['build_warranty']) {
                $data['build_warranty_component'][$i]['selected'] = 'selected';
            }else {
                $data['build_warranty_component'][$i]['selected'] = '';
            }
        }
        $data['build_cooling_component'] = $this->component->getEasyComponents(12);
        for ($i=0; $i < count($data['build_cooling_component']); $i++) { 
            if ($data['build_cooling_component'][$i]['component_id'] == $data['build_cooling']) {
                $data['build_cooling_component'][$i]['selected'] = 'selected';
            }else {
                $data['build_cooling_component'][$i]['selected'] = '';
            }
        }
        $this->load->view('admin/head');
        $this->parser->parse('admin/editbuild', $data);
        $this->load->view('admin/foot');
    }

    public function addViewBuild() {
        $data['build_cpu'] = $this->component->getEasyComponents(1);
        $data['build_motherboard'] = $this->component->getEasyComponents(2);
        $data['build_ram'] = $this->component->getEasyComponents(3);
        $data['build_case'] = $this->component->getEasyComponents(4);
        $data['build_psu'] = $this->component->getEasyComponents(5);
        $data['build_gpu'] = $this->component->getEasyComponents(6);
        $data['build_ssd'] = $this->component->getEasyComponents(7);
        $data['build_hdd'] = $this->component->getEasyComponents(8);
        $data['build_soft'] = $this->component->getEasyComponents(9);
        $data['build_acce'] = $this->component->getEasyComponents(10);
        $data['build_warranty'] = $this->component->getEasyComponents(11);
        $data['build_cooling'] = $this->component->getEasyComponents(12);
        $this->load->view('admin/head');
        $this->load->view('admin/addbuild', $data);
        $this->load->view('admin/foot');
    }

    public function saveBuild() {
        $files = $_FILES['images'];
        $param = $this->input->post();
        if ($param['oldimg'] != '') {
            $oldimgs = explode('-', $param['oldimg']);
        }else{
            $oldimgs = [];
        }
        $count = 0;
        for ($i=0; $i < count($oldimgs); $i++) { 
            if ($oldimgs[$i] == '1') {
                $count++;
            }
        }
        if ($count == 1) {
            $img = file_get_contents($files['tmp_name'][0]);
            $imgbase64 = base64_encode($img);
            $this->editshoifyproduct($param['product_id'], $param['build_name'], $param['build_price'], $param['variant_id'], $imgbase64);
        }else{
            $this->editshoifyproduct($param['product_id'], $param['build_name'], $param['build_price'], $param['variant_id'], '000');
        }
        $this->builds->saveBuild($param, $files);
    }

    public function addBuild() {
        $files = $_FILES['images'];
        $param = $this->input->post();
        $img = file_get_contents($files['tmp_name'][0]);
        $imgbase64 = base64_encode($img);
        $temp = $this->addshoifyproduct($param['build_name'], $param['build_price'], $imgbase64);
        $data = json_decode($temp, true);
        $param['variant_id'] = $data['product']['variants'][0]['id'];
        $data1 = json_decode($this->addshoifyproductgraphql($param['variant_id']), true);
        $param['front_variant_id'] = $data1['data']['productVariant']['storefrontId'];
        $param['product_id'] = $data['product']['id'];
        $this->builds->addBuild($param, $files);
    }

    public function deleteBuild() {
        $build_id = $this->input->get('build_id');
        $this->builds->deleteBuild($build_id);
    }
}