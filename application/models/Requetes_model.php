<?php

class Requetes_model extends CI_Model {

        public function req1()
        {
                $this->db->from('data');
                $this->db->where('marital-status', 'Divorced');
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
                $this->db->select_max('ABS(`capital-gain`)', 'max');
                $query = $this->db->get('data');
                return $query->row()->max;
        }

        public function req2()
        {
                $this->db->select_sum('capital-gain', 'sum');
                $query = $this->db->get('data');
                return $query->row()->sum;
        }

        public function sensitivityReq3()
        {
                $this->db->select_max("ABS(`capital-loss`)", 'max');
                $query = $this->db->get('data');
                return $query->row()->max;
        }

        public function req3()
        {
                $this->db->select_sum('capital-loss', 'sum');
                $query = $this->db->get('data');
                return $query->row()->sum;
        }

}