<?php

class Users_model extends CI_Model {

        public function getUsers()
        {
                $query = $this->db->get('users');
                return $query->result();
        }

        public function login($login, $pwd) {
                $this->db->from('users');
                $this->db->where('login', $login);
                $this->db->where('password', $pwd);
                return $this->db->count_all_results() > 0;
        }

}