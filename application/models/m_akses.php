<?php

class M_akses extends CI_Model 
{
    //untuk mengambil semua data pada tabel admin
    public function ambilsemuaadmin()            
    {
        return $this->db->get('admin');
    }

    //function untuk memasukkan/menambahkan admin Baru
    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }
}