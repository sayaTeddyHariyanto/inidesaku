<?php
    class Entri extends CI_Controller
    {   
        public function __construct(){
            parent::__construct();
            $this->load->model('m_entri'); //memanggil view model m_entri untuk dihubungkan dengan databasenya
        }
        public function index()//method index dijadikan function/controller dari bagian view file index
        {
            $data['tb_kk'] = $this->m_entri->ambilsemua()->result(); //memanggil method ambilsemua di m_entri dari tb_kk ditampung $data
            $this->load->view('templates/header'); //memanggil viewnya header
            $this->load->view('templates/sidebar'); //memanggil viewnya sidebar
            $this->load->view('entri/index', $data); //memanggil view index yang ada di folder entri dan load $data
            $this->load->view('templates/footer'); //memanggil viewnya footer
        }
        public function detail($id_kk){ //menampilkan detail berdasarkan id_kknya
            $where = array('id_kk'=>$id_kk);    //membuat array dari variabel id_kk memasukkan ke dalam variabel $where
            $data['id_kk'] = $id_kk; 
            $data['tb_penduduk'] =$this->m_entri->tampilind($where)->result(); //load modal m_entri dengan function tampilind
            $this->load->view('templates/header'); // load view headerm sidebar, footer, folder entri dengan nama filenya detail
            $this->load->view('templates/sidebar'); 
            $this->load->view('entri/detail', $data); //menampilkan nilai dari $data yang telah di proses pada model
            $this->load->view('templates/footer');
        }

        public function edit_data($nik){ //function edit pada detail, setelah klik detail dari laman index
            $where = array('nik' => $nik); //nilai array berisi variabel nik dimasukkan ke dalan $where
            $data['tb_penduduk'] = $this->m_entri->edit_data($where, 'tb_penduduk')->result(); //memanggil function edit_data pada modal m_entri parameter $where, dari tabel penduduk

            //code dibawah untuk load tampilan headerm sidebar footer serta form isian edit datanya
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('entri/edit_data', $data);
            $this->load->view('templates/footer');
        }

        public function editkk($id_kk){ //function edit pada index, saat klik data penduduk di sidebar
            $where = array('id_kk' => $id_kk); //nilai array berisi id_kk dimasukkan kedalam $where

            $data['tb_kk'] = $this->m_entri->editkk($where, 'tb_kk')->result(); //panggil function editkk pada model m_entri menghasilkan result, kemudian masukkan ke $where
            
            //load view header, sidebar, footer, dan form edit kk
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('entri/editkk', $data);
            $this->load->view('templates/footer');
        }
        //menampilkan view header, sidebar, footer dan form tambahkk
        public function tambahkk(){ 
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('entri/tambahkk');
            $this->load->view('templates/footer');
        }

        public function tambah_kk(){
            //merekam data inputan
            $no_kk =$this->input->post('no_kk');
            $rt =$this->input->post('rt');
            $rw =$this->input->post('rw');

            //masukkan data diatas ke dalam array dan dibawahnya dibongkar lagi
            $data =array(
                'no_kk' => $no_kk,
                'rt' => $rt,
                'rw' => $rw
            );

            //insert ke dalam database melalui function masuk_kk di model m_entri
            $this ->m_entri->masuk_kk($data, 'tb_kk');

            //redirect ke index
            redirect('entri/index');
        }
        public function view_tambah($id_kk) //menampilkan form tambah individu
        {
            $where = array('id_kk'=>$id_kk);
            $data['id_kk'] = $id_kk;
            //menampilkan view headerm sidebar, tambahind
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('entri/tambahind', $data);
            $this->load->view('templates/footer');
        }
        public function tambahind(){ 
            //merekam data yang dimasukkan
            $id_kk = $this->input->post('id_kk');
            $nik = $this->input->post('nik');
            $nama = $this->input->post('nama');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $jk = $this->input->post('jk');
            $gol_dar = $this->input->post('gol_dar');
            $alamat = $this->input->post('alamat');
            $pekerjaan = $this->input->post('pekerjaan');
            $kewarganegaraan = $this->input->post('kewarganegaraan');
            $agama = $this->input->post('agama');

            //masukkan hasil diatas ke dalam array
            $data = array(
                'nik' => $nik,
                'nama'=> $nama,
                'tanggal_lahir' => $tanggal_lahir,
                'tempat_lahir' => $tempat_lahir,
                'jk' => $jk,
                'gol_dar' => $gol_dar,
                'alamat' => $alamat,
                'pekerjaan' => $pekerjaan,
                'kewarganegaraan' => $kewarganegaraan,
                'agama' => $agama,
                'id_kk' => $id_kk
            );
            if($data > 0){
            //insert ke dalam database
            $this->m_entri->masuk_ind($data, 'tb_penduduk');
            }else{
                
            }    
            //redirect
            redirect('entri');
        }

        // baris kode function update adalah method yang diajalankan ketika tombol submit pada form v_edit ditekan, method ini berfungsi untuk merekam data, memperbarui baris database yang dimaksud, lalu mengarahkan pengguna ke controller crud method index
        function updatekk(){
            // keempat baris kode ini berfungsi untuk merekam data yang dikirim melalui method post
            $id_kk = $this->input->post('id_kk');
            $no_kk =$this->input->post('no_kk');
            $rt =$this->input->post('rt');
            $rw =$this->input->post('rw');
            // berikut ini adalah array yang berguna untuk menjadikan variabel diatas menjadi 1 variabel yang nantinya akan disertakan ke dalam query update pada model
            $data = array(
                'no_kk' => $no_kk,
                'rt' => $rt,
                'rw' => $rw
            );
            // kode yang berfungsi menyimpan id user ke dalam array $where pada index array bernama id
            $where =array('id_kk'=>$id_kk);
            // kode untuk melakukan query update dengan menjalankan method update_data() 
            $this->m_entri->update_kk($where, $data, 'tb_kk');
              // baris kode yang mengerahkan pengguna ke link base_url()crud/index/
            redirect('entri/index');
        }

        //merekam dan memperbarui data penduduk di detail.php
        function update_data(){
            //rekam data menggunakan method post
            $id_kk = $this->input->post('id_kk');
            $nik =$this->input->post('nik');
            $nama =$this->input->post('nama');
            $tempat_lahir =$this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jk =$this->input->post('jk');
            $gol_dar =$this->input->post('gol_dar');
            $alamat =$this->input->post('alamat');
            $pekerjaan =$this->input->post('pekerjaan');
            $kewarganegaraan =$this->input->post('kewarganegaraan');
            $agama =$this->input->post('agama');

            //banyak variabel disimpan ke dalam array, kemudian dimasukkan ke variabel $data 
            $data = array(
                'nik' => $nik,
                'nama' => $nama,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'jk' => $jk,
                'gol_dar' => $gol_dar,
                'alamat' => $alamat,
                'pekerjaan' => $pekerjaan,
                'kewarganegaraan' => $kewarganegaraan,
                'agama' => $agama,
                'id_kk' => $id_kk
            );

            // kode yang berfungsi menyimpan nik ke dalam array $where pada index array
            $where =array('nik'=>$nik);
            // kode untuk melakukan query update dengan menjalankan method update_data() 
            $this->m_entri->update_data($where, $data, 'tb_penduduk');
              // baris kode yang mengerahkan pengguna ke link base_url()entri/
            redirect('entri');
        }

        function hapus_penduduk($id){
                // baris kode ini berisi fungsi untuk menyimpan id kedalam array $where pada index array bernama 'id'
            $where = array('nik' => $id);
              // kode di bawah ini untuk menjalankan query hapus yang berasal dari method hapus_pend() pada model m_entri pada function hapus_pend dari tb_penduduk
            $this->m_entri->hapus_pend($where,'tb_penduduk');
              // kode yang berfungsi mengarakan pengguna ke link base_url()entri/index/
            redirect('entri/index');
        }

        function hapus_kk($id_kk){
                // baaris kode ini berisi fungsi untuk menyimpan id_kk kedalam array $where pada index array bernama '$id_kk'
            $where = array('id_kk' => $id_kk);
              // kode di bawah ini untuk menjalankan query hapus yang berasal dari method hapus_data() pada model m_entri
            $this->m_entri->hapus_kk($where,'tb_kk');
              // kode yang berfungsi mengarakan pengguna ke link base_url()entri/index/
            redirect('entri/index');
        }

        
    }

    