<?php

class About {
    public function index($nama = 'Shandika', $pekerjaan = 'Dosen', $umur = 32) 
    {
       $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');

    }
    
    public function page()
    {
        $data['judul'] = 'pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
    
}