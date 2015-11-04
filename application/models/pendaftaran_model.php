<?php
class Pendaftaran_model extends MY_Model
{
    public $_tabel = 'tb_siswa';

    public $form_rules = array(
        array(
            'field' => 'nisn',
            'label' => 'NISN',
            'rules' => 'trim|xss_clean|required|exact_length[10]|is_unique[tb_siswa.nisn]'
        ),
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|xss_clean|required|max_length[64]'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|xss_clean|required|max_length[64]'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|xss_clean|required|max_length[64]|is_unique[tb_siswa.email]'
        ),
        array(
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'trim|xss_clean|required|max_length[64]'
        ),
        array(
            'field' => 'nama_panggilan',
            'label' => 'Nama Panggilan',
            'rules' => 'trim|xss_clean|required|max_length[32]'
        ),
        array(
            'field' => 'captcha',
            'label' => 'Captcha',
            'rules' => 'trim|xss_clean|required|exact_length[4]|callback__validate_captcha'
        ),
    );

    public $default_values = array(
        'nisn' => '',
        'email' => '',
        'username' => '',
        'password' => '',
        'nama' => '',
        'nama_panggilan' => '',
        'captcha' => '',
    );

    public function daftar($siswa)
    {
        // Data captcha tidak perlu disimpan di DB.
        unset($siswa->captcha);

        // Generate random string username dan password untuk login user.

        // Proses insert data ke tabel tb_siswa.
        $id = $this->insert($siswa);
        if ($id) {
            $no_siswa = format_no_siswa($id);

            // Set data untuk ditampilkan.
            $data_session = array(
                'nomor_siswa' => $no_siswa,
                'username' => $siswa->username,
                'password' => $siswa->password,
                'email' => $siswa->email,
            );
            $this->session->set_userdata($data_session);
            return true;
        }
        return false;
    }

    public function reset_siswa()
    {
        $data_session = array(
            'nomor_siswa' => '',
            'username'  => '',
            'password'  => '',
            'email' => '',
        );
        $this->session->unset_userdata($data_session);
    }
}