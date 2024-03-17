<?php

// Fix error di view bagian base_url
require_once BASEPATH . "/helpers/url_helper.php";
//

class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view("view-form-matakuliah");
    }

    public function cetak()
    {
        $data = [
            "kode" => $this->input->post("kode"),
            "nama" => $this->input->post("nama"),
            "sks" => $this->input->post("sks"),
        ];

        $this->load->view("view-data-matakuliah", $data);
    }
}
