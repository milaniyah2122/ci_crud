<?php
    class Menu extends CI_Controller{
        public function index(){
            $this->load->view("templates/menu");
        }

        public function barang(){
            $this->load->view("templates/menu");
            $this->load->view("barang/index");
        }
    }
?>