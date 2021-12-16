<?php

class LoginModel extends CI_Model {

    public function checkLogin($name, $password) {
        //query the table 'users' and get the result count
        $this->db->where('username', $name);
        $this->db->where('password', $password);
        $query = $this->db->get('users');

        return $query->num_rows();
    }

    public function checkAdmin($name) {
        $this->db->where('username', $name);
        $this->db->where('role', "Admin");
        $query = $this->db->get('users');
        return $query->num_rows();
    }
}
