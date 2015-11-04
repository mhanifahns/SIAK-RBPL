<?php
class Siswa extends Dashboard_Controller
{
    public $data = array(
        'halaman' => 'siswa',
        'main_view' => 'siswa_list',
        'title' => 'Data Siswa'
    );

	public function index($offset = null)
	{ 
        $siswa = $this->siswa->get_all_paged($offset);
        if ($siswa) {
            $this->data['siswa'] = $siswa;
            $this->data['paging'] = $this->siswa->paging('biasa', site_url('dashboard/siswa/halaman/'), 3);
        } else {
            $this->data['siswa'] = 'Belum ada siwa terdaftar';
        }
        $this->data['form_action'] = site_url('dashboard/siswa/cari');
        $this->load->view($this->layout, $this->data);
	}

    public function cari($offset = 0)
    {
        $siswa = $this->siswa->cari($offset);
        if ($siswa) {
            $this->data['siswa'] = $siswa;
            $this->data['paging'] = $this->siswa->paging('pencarian', site_url('dashboard/siswa/cari/'), 3);
        } else {
            $this->data['siswa'] = 'Data tidak ditemukan.'. anchor('dashboard/siswa', ' Tampilkan semua siswa.', 'class="alert-link"');
        }
        $this->data['form_action'] = site_url('dashboard/siswa/cari');
        $this->load->view($this->layout, $this->data);
    }    
}