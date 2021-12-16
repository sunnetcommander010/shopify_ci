<?php

class ComponentModel extends CI_Model {

    public function getComponents($component_type) {
        //query the table 'builds' and get the result
        $this->db->select('components.*, 
                type.type_name AS type_name');
        $this->db->from('components','component_type');
        if ($component_type != null) {
            $this->db->where('component_type', $component_type);
        }
        $this->db->join('component_type AS type', 'components.component_type=type.type_id', 'left');
        // $this->db->order_by('component_type', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getEasyComponents($component_type) {
        $this->db->select('component_id,component_brand,component_name,component_value');
        $this->db->from('components');
        $this->db->where('component_type', $component_type);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function deleteComponent($id) {
        $this->db->where('component_id', $id);
        $this->db->delete('components');
        redirect(base_url().'admin');
    }
    public function editComponent($id) {
        $this->db->select('*');
        $this->db->from('components');
        $this->db->where('component_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function saveComponent($param) {
        $data = array(
            'component_type'      => $param['component_type'],
            'component_brand'      => $param['component_brand'],
            'component_name'      => $param['component_name'],
            'component_value'      => $param['component_value'],
            'component_short_desc'      => $param['component_short_desc'],
            'component_desc'      => $param['component_desc'], 
        );
        $this->db->where('component_id', $param['component_id']);
        $this->db->update('components', $data);
        redirect(base_url().'admin');
    }

    public function addComponent($param) {
        $data = array(
            'component_type'      => $param['component_type'],
            'component_brand'      => $param['component_brand'],
            'component_name'      => $param['component_name'],
            'component_value'      => $param['component_value'],
            'component_short_desc'      => $param['component_short_desc'],
            'component_desc'      => $param['component_desc'], 
        );
        $this->db->insert('components', $data);
        redirect(base_url().'admin');
    }
}
