<?php

class Man_akses extends CI_Controller {

    function __construct(){
        parent::__construct();	
            // ini adalah function untuk memuat model bernama m_akses
        $this->load->model('m_akses');
        // 
            $this->load->helper('url'); //load helper url
        }
    //  method yang akan diakses saat controller ini diakses
        function index(){
        // ini adalah variabel array $data yang berguna untuk menyimpan data 
        $data['admin'] = $this->m_akses->ambilsemuaadmin()->result();
        // ini adalah baris kode yang berfungsi menampilkan vadmin dan membawa data dari tabel user
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/vadmin', $data);
		$this->load->view('templates/footer');
        }

        function tambah(){ 
            //menampilkan view
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('admin/v_inputadmin');
            $this->load->view('templates/footer');
        }

        function tambah_admin($id_admin, $data){
            // ini adalah baris kode yang berfungsi merekam data yang diinput oleh pengguna
            $id_admin =$this->input->post('id_admin');
            $nama_admin = $this->input->post('nama_admin');  
            $username = $this->input->post('username');
            $password = $this->input->post('password');
                
            // array yang berguna untuk mennjadikanva variabel diatas menjadi 1 variabel yang nantinya akan di sertakan dalam query insert
            $data = array(
                'id_admin' => $id_admin,
                'nama_admin' => $nama_admin,
                'username' => $username,
                'password' => $password
            );
            // method yang berfungsi melakukan insert ke dalam database yang mengirim 2 parameter yaitu sebuah array data dan nama tabel yang dimaksud
            $this->m_akses->input_data($data,'admin');
          // kode yang berfungsi mengarahkan pengguna ke link base_url()man_akses/index/ 
        redirect('man_akses/index');
        }
}