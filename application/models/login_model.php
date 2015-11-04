<?php
class Login_model extends MY_Model
{
    public $_tabel = 'tb_siswa';

    public $form_rules = array(
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|xss_clean|required'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|xss_clean|required'
        ),
    );

    public function login($login)
    {
        $login = (object) $login;
    

        // Cari data siswa di DB.
        $where = array(
            'username' => $login->username,
            'password' => $login->password,
            // Hanya yang status pendaftaran masih aktif yang boleh login
            'status_pendaftaran' => '1',
        );
        $siswa = $this->get($where);

        if ($siswa) {
            // Buat data session jika login benar.
            $data_session = array(
                'nama_panggilan' => $siswa->nama_panggilan,
                'no_siswa' => $siswa->id,
                'login_status' => true,
                'user_level' => 'siswa',
            );
            $this->session->set_userdata($data_session);

            // Return true jika login sukses.
            return true;
        }

        // Return false jika login salah.
        return false;
    }

    public function logout()
    {
        $this->session->unset_userdata(
            array(
                'nama_panggilan' => '',
                'no_siswa' => '',
                'login_status' => false,
                'user_level' => ''
            )
        );
        $this->session->sess_destroy();
    }
}