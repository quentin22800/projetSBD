<?php

class Requetes_model extends CI_Model {

        public function req1()
        {
                $this->db->from('data');
                $this->db->where('COLUMN6', 'Divorced');
                return $this->db->count_all_results();
        }

        public function login($login, $pwd) {
                $this->db->from('users');
                $this->db->where('login', $login);
                $this->db->where('password', $pwd);
                return $this->db->count_all_results() > 0;
        }

        public function sensitivityReq2()
        {
                $this->db->select_max('ABS(COLUMN11)', 'max');
                $query = $this->db->get('data');
                return $query->row()->max;
        }

        public function req2()
        {
                $this->db->select_sum('COLUMN11', 'sum');
                $query = $this->db->get('data');
                return $query->row()->sum;
        }

        public function sensitivityReq3()
        {
                $this->db->select_max('ABS(COLUMN12)', 'max');
                $query = $this->db->get('data');
                return $query->row()->max;
        }

        public function req3()
        {
                $this->db->select_sum('COLUMN12', 'sum');
                $query = $this->db->get('data');
                return $query->row()->sum;
        }

}