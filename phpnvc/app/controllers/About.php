<?php



class About extends Controller
{
    public function index($nama = 'Adi', $pekerjaan = 'Podcaster', $umur = 24)
    {
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About Me';
        $this->view('tamplates/header', $data);
        $this->view('about/index', $data);
        $this->view('tamplates/footer');
    }




    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('tamplates/header', $data);
        $this->view('about/page');
        $this->view('tamplates/footer');
    }
}
