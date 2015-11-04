<?php
class Lupa_Password extends Public_Controller
{
    public $data = array(
        'halaman' => 'lupa-password',
        'main_view' => 'lupa_password_form'
    );

    public function index()
    {
        // Data input dari form.
        $siswa = (object) $this->input->post(null, true);

        // Data untuk form.
        if (! $_POST) {
            $this->data['values'] = (object) $this->lupa_password->default_values;
        } else {
            $this->data['values'] = $siswa;
        }

        // Validasi
        if (! $this->lupa_password->validate('form_rules')) {
            $this->data['captcha'] = $this->lupa_password->buat_captcha();
            $this->load->view($this->layout, $this->data);
            return false;
        }

        // Apakah user ada?
        $siswa = (object) $this->input->post(null, true);
        $where = array(
            'nisn'  => $siswa->nisn,
            'email' => $siswa->email,
        );
        if (! $this->lupa_password->get($where)) {
            $this->session->set_flashdata('pesan_error', 'Informasi yang anda isikan salah, atau Anda tidak terdaftar sebagai Siswa SMK PTIK. ' .anchor('lupa-password', 'Ulangi lagi.', 'class="alert-link"'));
            redirect('lupa-password-error');
        }

        // Proses update username dan password
        if (! $this->lupa_password->reset($where)) {
            $this->session->set_flashdata('pesan_error', 'Proses gagal, segera'. anchor('kontak', 'hubungi Operator / Karyawan Tata Usaha.', 'class="alert-link"'));
            redirect('lupa-password-error');
        } else {
            $this->session->set_flashdata('pesan', 'Proses Berhasil, cek email Anda!');
            redirect('lupa-password-sukses');
        }
    }

    public function sukses()
    {
        $this->data['main_view'] = 'sukses';
        $this->data['title'] = 'Lupa Password Sukses';
        $this->load->view($this->layout, $this->data);
    }

    public function error()
    {
        $this->data['main_view'] = 'error';
        $this->data['title'] = 'Lupa Password Error';
        $this->load->view($this->layout, $this->data);
    }

    // Callback validasi captcha
    public function _validate_captcha() {
        if ($this->session->userdata('captcha') == $this->input->post('captcha', true)) {
            return true;
        } else {
            $this->form_validation->set_message('_validate_captcha', 'Captcha salah.');
            return false;
        }
    }
}