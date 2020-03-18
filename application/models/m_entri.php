<?php

class M_entri extends CI_Model 
{   
    //menampilkan data dari tabel tb_kk
    public function ambilsemua()             
    {
        return $this->db->get('tb_kk');
    }

    //menampilkan data per individu pada detail.php dari tb_penduduk
    function tampilind($where){
        $this->db->where($where);
        return $this->db->get('tb_penduduk');
    }
    
    //memasukkan data kk dengan parameter $data dan $table menggunakan insert
    function masuk_kk($data, $table){
        $this->db->insert($table, $data);
    }

    //memasukkan data penduduk dengan dua parameter insert ke dalam database
    function masuk_ind($data, $table){
        $this->db->insert($table, $data);
    }
    
    //model edit_data menangkap dua parameter
    function edit_data($where, $table){
        return $this->db->get_where($table, $where);
    }

    //model update data untuk menyimpan edit penduduk
    function update_data($where, $data, $table){
        $this->db-> where($where);
        $this->db->update($table, $data);
    }

    //menangkap dua parameter dan mengembalikan nilainya kembali
    function editkk($where, $table){
        return $this->db->get_where($table, $where);
    }

    //menyimpan edit kk
    function update_kk($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    //hapus data kk pada variable $where yang terpilih dan menghapusnya melalui delete $table
    function hapus_kk($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    //hapus data penduduk pada variable $where yang terpilih dan menghapusnya melalui delete $table
    function hapus_pend($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}
