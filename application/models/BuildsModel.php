<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BuildsModel extends CI_Model {

    public function getBuilds() {
        //query the table 'builds' and get the result
        $this->db->select('builds.*, 
                cpu.component_brand AS cpu_brand, cpu.component_name AS cpu_name, cpu.component_value AS cpu_value,
                ram.component_brand AS ram_brand, ram.component_name AS ram_name, ram.component_value AS ram_value,
                ssd.component_brand AS ssd_brand, ssd.component_name AS ssd_name, ssd.component_value AS ssd_value,
                gpu.component_brand AS gpu_brand, gpu.component_name AS gpu_name, gpu.component_value AS gpu_value,');
        $this->db->from('builds','components');
        $this->db->join('components AS cpu', 'builds.build_cpu=cpu.component_id', 'left');
        $this->db->join('components AS ram', 'builds.build_ram=ram.component_id', 'left');
        $this->db->join('components AS ssd', 'builds.build_ssd=ssd.component_id', 'left');
        $this->db->join('components AS gpu', 'builds.build_gpu=gpu.component_id', 'left');
        $this->db->order_by('build_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getCarts() {
        $this->db->select('builds.*, 
            cpu.component_brand AS cpu_brand, cpu.component_name AS cpu_name, cpu.component_value AS cpu_value,
            ram.component_brand AS ram_brand, ram.component_name AS ram_name, ram.component_value AS ram_value,
            ssd.component_brand AS ssd_brand, ssd.component_name AS ssd_name, ssd.component_value AS ssd_value,
            gpu.component_brand AS gpu_brand, gpu.component_name AS gpu_name, gpu.component_value AS gpu_value,');
        $this->db->from('builds','components');
        $this->db->join('components AS cpu', 'builds.build_cpu=cpu.component_id', 'left');
        $this->db->join('components AS ram', 'builds.build_ram=ram.component_id', 'left');
        $this->db->join('components AS ssd', 'builds.build_ssd=ssd.component_id', 'left');
        $this->db->join('components AS gpu', 'builds.build_gpu=gpu.component_id', 'left');
        $this->db->where('cart !=','0');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function addCart($build_id) {
        $this->db->set('cart', 'cart + 1',FALSE); 
        $this->db->where('build_id', $build_id); 
        $this->db->update('builds');
        redirect(base_url().'admin/cart');
    }

    public function deleteCart($build_id) {
        $this->db->set('cart', '0',FALSE); 
        $this->db->where('build_id', $build_id); 
        $this->db->update('builds');
        redirect(base_url().'admin/cart');
    }

    public function getBuild($id) {
        $this->db->select('*');
        $this->db->from('builds');
        $this->db->where('build_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function deleteBuild($id) {
        $this->db->where('build_id', $id);
        $this->db->delete('builds');
        redirect(base_url().'admin/build');
    }
    public function editBuild($id) {
        $this->db->select('*');
        $this->db->from('components');
        $this->db->where('component_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function saveBuild($param, $files) {
        if(!isset($param['build_isActive']))$param['build_isActive']=0;
        if(!isset($param['build_isLimited']))$param['build_isLimited']=0;
        if(!isset($param['build_isWifi']))$param['build_isWifi']=0;
        if(!isset($param['build_isRGB']))$param['build_isRGB']=0;
        if(!isset($param['build_isBluetooth']))$param['build_isBluetooth']=0;
        if(!isset($param['build_isUSBC']))$param['build_isUSBC']=0;
        if(!isset($param['build_isVRReady']))$param['build_isVRReady']=0;
        if(!isset($param['build_isStreamReady']))$param['build_isStreamReady']=0;
        $data = array(
            'build_name'      => $param['build_name'],
            'build_price'      => $param['build_price'],
            'build_cpu'      => $param['build_processor'],
            'build_motherboard'  => $param['build_motherboard'],
            'build_ram'      => $param['build_ram'],
            'build_case'      => $param['build_case'], 
            'build_gpu'      => $param['build_gpu'], 
            'build_ssd'      => $param['build_ssd'], 
            'build_psu'      => $param['build_psu'], 
            'build_hdd'      => $param['build_hdd'], 
            'build_cooling'      => $param['build_cooling'], 
            'build_soft'      => $param['build_soft'], 
            'build_acce'      => $param['build_acce'], 
            'build_warranty'      => $param['build_warranty'], 
            'build_fortnitefps'      => $param['build_fortnitefps'], 
            'build_csfps'      => $param['build_csfps'], 
            'build_lolfps'      => $param['build_lolfps'],
            'build_isActive'    => $param['build_isActive'],
            'build_isLimited'    => $param['build_isLimited'],
            'build_isWifi'    => $param['build_isWifi'],
            'build_isRGB'    => $param['build_isRGB'],
            'build_isBluetooth'    => $param['build_isBluetooth'],
            'build_isUSBC'    => $param['build_isUSBC'],
            'build_isVRReady'    => $param['build_isVRReady'],
            'build_isStreamReady'    => $param['build_isStreamReady'],
        );
        $this->db->where('build_id', $param['build_id']);
        $this->db->update('builds', $data);
        $dirlast = str_pad($param['build_id'],4, "0", STR_PAD_LEFT);
        if ($param['oldimg'] != '') {
            $this->deleteFiles($param['oldimg'], $dirlast,$param['action']);
        }

        if ($files['name'][0] != '') {
            $this->file_upload_edit($files, $dirlast, $param['oldimg'], $param['action']);
        }
        redirect(base_url().'admin/build');
    }

    public function addBuild($param, $files) {
        if(!isset($param['build_isActive']))$param['build_isActive']=0;
        if(!isset($param['build_isLimited']))$param['build_isLimited']=0;
        if(!isset($param['build_isWifi']))$param['build_isWifi']=0;
        if(!isset($param['build_isRGB']))$param['build_isRGB']=0;
        if(!isset($param['build_isBluetooth']))$param['build_isBluetooth']=0;
        if(!isset($param['build_isUSBC']))$param['build_isUSBC']=0;
        if(!isset($param['build_isVRReady']))$param['build_isVRReady']=0;
        if(!isset($param['build_isStreamReady']))$param['build_isStreamReady']=0;
        $data = array(
            'build_name'      => $param['build_name'],
            'build_price'      => $param['build_price'],
            'build_cpu'      => $param['build_processor'],
            'build_motherboard'  => $param['build_motherboard'],
            'build_ram'      => $param['build_ram'],
            'build_case'      => $param['build_case'], 
            'build_gpu'      => $param['build_gpu'], 
            'build_ssd'      => $param['build_ssd'], 
            'build_psu'      => $param['build_psu'], 
            'build_hdd'      => $param['build_hdd'], 
            'build_cooling'      => $param['build_cooling'], 
            'build_soft'      => $param['build_soft'], 
            'build_acce'      => $param['build_acce'], 
            'build_warranty'      => $param['build_warranty'], 
            'build_fortnitefps'      => $param['build_fortnitefps'], 
            'build_csfps'      => $param['build_csfps'], 
            'build_lolfps'      => $param['build_lolfps'],
            'build_isActive'    => $param['build_isActive'],
            'build_isLimited'    => $param['build_isLimited'],
            'build_isWifi'    => $param['build_isWifi'],
            'build_isRGB'    => $param['build_isRGB'],
            'build_isBluetooth'    => $param['build_isBluetooth'],
            'build_isUSBC'    => $param['build_isUSBC'],
            'build_isVRReady'    => $param['build_isVRReady'],
            'build_isStreamReady'    => $param['build_isStreamReady'],
            'variant_id' => $param['variant_id'],
            'product_id' => $param['product_id'],
            'front_variant_id' => $param['front_variant_id'],
            'build_tag' => '',
            'build_description' => '',
            'cart' => '0',
        );
        $this->db->insert('builds', $data);
        $insert_id = $this->db->insert_id();
        if ($files['name'][0] != '') {
            $this->file_upload($files, $insert_id);
        }
        redirect(base_url().'admin/build');
    }

    function deleteFiles($oldimg, $dirlast) {
        $data = explode('-', $oldimg);
        for ($i=0; $i < count($data); $i++) {
            unlink('./assets/img/builds/'.$dirlast.'/'.$data[$i].'.png');
            unlink('./assets/img/builds/'.$dirlast.'/'.$data[$i].'_thumb.png');
        }
    }

    function file_upload($files, $id) {
        $dirlast = str_pad($id,4, "0", STR_PAD_LEFT);
        $destFolder = './assets/img/builds/'.$dirlast.'/';
        if (!file_exists($destFolder))
            mkdir($destFolder, 0777, true);
        for ($i=0; $i < count($files['name']); $i++) { 
            $config["upload_path"] = $destFolder;
            $config["allowed_types"] = ["png"];
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $_FILES["file"]["name"] = strval($i+1).'.png';
            $_FILES["file"]["type"] = $files["type"][$i];
            $_FILES["file"]["tmp_name"] = $files["tmp_name"][$i];
            $_FILES["file"]["error"] = $files["error"][$i];
            $_FILES["file"]["size"] = $files["size"][$i];
            if($this->upload->do_upload('file'))
            {
                $data = $this->upload->data();
            }

            $_FILES["file"]["name"] = strval($i+1).'_thumb.png';

            if($this->upload->do_upload('file'))
            {
                $data = $this->upload->data();
            }
        }
    }
    function file_upload_edit($files, $dirlast, $oldimg, $length) {
        if ($oldimg != '') {
            $oldimgs = explode('-', $oldimg);
        }else {
            $oldimgs = [];
        }
        // $dirlast = str_pad($dir,4, "0", STR_PAD_LEFT);
        $destFolder = './assets/img/builds/'.$dirlast.'/';
        if (!file_exists($destFolder))
        mkdir($destFolder, 0777, true);
        // $count = $length - count($oldimgs);
        for ($i=0; $i < count($files['name']); $i++) { 
            $config["upload_path"] = $destFolder;
            // $config["allowed_types"] = ["jpg","jpeg","png","gif"];
            $config["allowed_types"] = ["png"];
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $_FILES["file"]["type"] = $files["type"][$i];
            $_FILES["file"]["tmp_name"] = $files["tmp_name"][$i];
            $_FILES["file"]["error"] = $files["error"][$i];
            $_FILES["file"]["size"] = $files["size"][$i];
            if ($i+1 > count($oldimgs)) {
                $length++;
                $_FILES["file"]["name"] = $length.'.png';
            } else {
                $_FILES["file"]["name"] = $oldimgs[$i].'.png';
            }
            // explode('.',$files["name"][$i])[1];
            if($this->upload->do_upload('file'))
            {
                $data = $this->upload->data();
            }

            
            if ($i+1 > count($oldimgs)) {
                $_FILES["file"]["name"] = $length.'_thumb.png';
            }else {
                $_FILES["file"]["name"] = $oldimgs[$i].'_thumb.png';
            }

            if($this->upload->do_upload('file'))
            {
                $data = $this->upload->data();
            }
        }
    }
}