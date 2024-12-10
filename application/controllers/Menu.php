<?php
class Menu extends CI_Controller
{
    // Ini merupakan function bawaan CI
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Barang_model");
    }

    public function index()
    {
        $this->load->view("templates/menu");
    }

    public function barang()
    {
        $data['TbBarang'] = $this->Barang_model->get_all_barang();

        $this->load->view("templates/menu");
        $this->load->view("barang/index", $data);
    }

    public function tambah_barang()
    {
        $data["title"] = "Tambah Barang";
        $this->load->view("templates/menu");
        $this->load->view("barang/tambah");
    }
}
