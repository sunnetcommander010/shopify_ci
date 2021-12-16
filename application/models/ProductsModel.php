<?php

class ProductsModel extends CI_Model {

    public function getProducts() {
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
        $this->db->order_by('build_price', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getlimitedProducts() {
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
        $this->db->where('build_isLimited','1');
        $this->db->order_by('build_price', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getDetail($id) {
        $this->db->select('builds.*, 
                cpu.component_brand AS cpu_brand, cpu.component_name AS cpu_name, cpu.component_value AS cpu_value,
                ram.component_brand AS ram_brand, ram.component_name AS ram_name, ram.component_value AS ram_value,
                ssd.component_brand AS ssd_brand, ssd.component_name AS ssd_name, ssd.component_value AS ssd_value,
                gpu.component_brand AS gpu_brand, gpu.component_name AS gpu_name, gpu.component_value AS gpu_value,
                psu.component_brand AS psu_brand, psu.component_name AS psu_name, psu.component_value AS psu_value,
                soft.component_brand AS soft_brand, soft.component_name AS soft_name, soft.component_value AS soft_value,
                warranty.component_brand AS warranty_brand, warranty.component_name AS warranty_name, warranty.component_value AS warranty_value,
                mother.component_brand AS mother_brand, mother.component_name AS mother_name, mother.component_value AS mother_value,
                case.component_brand AS case_brand, case.component_name AS case_name, case.component_value AS case_value,');
        $this->db->from('builds','components');
        $this->db->join('components AS cpu', 'builds.build_cpu=cpu.component_id', 'left');
        $this->db->join('components AS ram', 'builds.build_ram=ram.component_id', 'left');
        $this->db->join('components AS ssd', 'builds.build_ssd=ssd.component_id', 'left');
        $this->db->join('components AS psu', 'builds.build_psu=psu.component_id', 'left');
        $this->db->join('components AS gpu', 'builds.build_gpu=gpu.component_id', 'left');
        $this->db->join('components AS soft', 'builds.build_soft=soft.component_id', 'left');
        $this->db->join('components AS warranty', 'builds.build_warranty=warranty.component_id', 'left');
        $this->db->join('components AS mother', 'builds.build_motherboard=mother.component_id', 'left');
        $this->db->join('components AS case', 'builds.build_case=case.component_id', 'left');
        $this->db->where('build_id', $id);
        $this->db->order_by('build_price', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }
}
