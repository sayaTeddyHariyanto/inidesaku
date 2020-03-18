<?php

class Dashboard extends CI_Controller 
{
    //fungsi index yang memanggil view dashboard, serta header,sidebar, dan footer
    public function index()
    {
        //templates itu nama folder di bagian view, sedangkan header,sidebar,footer,dan dashboard file di dalamnya
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }
}

