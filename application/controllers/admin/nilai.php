<?php
class Nilai extends Operator_Controller
{
    public $data = array(
        'halaman' => 'siswa',
        'main_view' => 'admin/nilai_form'
    );

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/nilai_model', 'nilai');
    }
    public function index()
    {
        // Input dari user.
        $nilai = $this->input->post(null, true);

        // Validasi.
        if ($this->nilai->validate('form_rules')) {
            if ($this->nilai->simpan($nilai)) {
                $this->session->set_flashdata('pesan', 'Nilai berhasil disimpan. Kembali ke halaman ' . anchor('admin/home', 'home.', 'class="alert-link"'));
                redirect('admin/nilai-sukses');
            } else {
                $this->session->set_flashdata('pesan_error', 'Maaf, penyimpanan nilai gagal. Coba ' . anchor('admin/nilai', 'ulangi', 'class="alert-link"') .' beberapa saat lagi.');
                redirect('admin/nilai-error');
            }
        }
          if (!$_POST) {
            $id = intval($this->session->userdata('no_siswa'));
            $this->data['values'] = (object) $this->biodata->get($id);
        } else {
            $this->data['values'] = (object) $biodata;
        }
        $this->data['form_action'] = site_url('dashboard/biodata');
        $this->load->view($this->layout, $this->data);
    }
    public function edit($id)
    {
        // Pastikan data nilai ada.
        if (! $this->nilai->get($id)) {
            $this->session->set_flashdata('pesan_error', 'Data siswa tidak ada. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/nilai/error');
        }

        // Data untuk form.
        if (!$_POST) {    
            $nilai = $this->nilai->get($id);
            $this->data['values'] = (object) $nilai;
        } else {
            $nilai = $this->input->post(null, true);
            $this->data['values'] = (object) $nilai;
        }

        // Validasi.
        if (! $this->nilai->validate('form_rules')) {
            $this->data['main_view'] = 'admin/nilai_form';
            $this->data['form_action'] = site_url('admin/nilai/edit/'.$id);
            $this->load->view($this->layout, $this->data);
            return;
        }

        // Simpan nilai.
        if ($this->nilai->simpan($nilai)) {
            $this->session->set_flashdata('pesan', 'Nilai berhasil disimpan. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/nilai/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'Nilai berhasil disimpan. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/nilai/error');
        }
    }

    public function sukses()
    {
        $this->data['main_view'] = 'sukses';
        $this->data['title'] = 'Nilai Sukses';
        $this->load->view($this->layout, $this->data);
    }

    public function error()
    {
        $this->data['main_view'] = 'error';
        $this->data['title'] = 'Nilai Error';
        $this->load->view($this->layout, $this->data);
    }

}
