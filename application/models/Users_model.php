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

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}