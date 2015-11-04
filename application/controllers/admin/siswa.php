<?php
class Siswa extends Operator_Controller
{
    public $data = array(
        'halaman' => 'siswa',
        'main_view' => 'admin/siswa_list',
        'title' => 'Data Siswa',
    );

    public function index($offset = 0)
    {
        $siswa = $this->siswa->get_all_paged($offset);
        if ($siswa) {
            $this->data['siswa'] = $siswa;
            $this->data['paging'] = $this->siswa->paging('biasa', site_url('admin/siswa/halaman/'), 4);
        } else {
            $this->data['siswa'] = 'Tidak ada data siswa.';
        }
        $this->load->view($this->layout, $this->data);
    }

    public function cari($offset = 0)
    {
        $siswa = $this->siswa->cari($offset);
        if ($siswa) {
            $this->data['siswa'] = $siswa;
            $this->data['paging'] = $this->siswa->paging('pencarian', site_url('admin/siswa/cari/'), 4);
        } else {
            $this->data['siswa'] = 'Data tidak ditemukan.'. anchor('admin/siswa', ' Tampilkan semua siswa.', 'class="alert-link"');
        }
        $this->load->view($this->layout, $this->data);
    }

    public function cetak($id)
    {
        // Pastikan data siswa ada.
        $siswa = $this->siswa->get($id);
        if (! $siswa) {
            $this->session->set_flashdata('pesan_error', 'Data siswa tidak ada. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa/error');
        }
        $data['siswa'] = $siswa;

        // Template untuk PDF, return view sbg string
        $html = $this->load->view('dashboard/biodata_pdf', $data, true);
        // Nomor perserta (untuk nama file)
        $no_siswa = format_no_siswa($id);

        // Cetak dengan html2pdf
        require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
        try {
            $html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
            $html2pdf->WriteHTML($html);
            $html2pdf->Output('biodata_'.$no_siswa.'.pdf');
        } catch (HTML2PDF_exception $e) {
            // echo $e;
            $this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa/error');
        }
    }

    public function sukses()
    {
        $this->data['main_view'] = 'sukses';
        $this->data['title'] = 'Data Siswa';
        $this->load->view($this->layout, $this->data);
    }

    public function error()
    {
        $this->data['main_view'] = 'error';
        $this->data['title'] = 'Data Siswa';
        $this->load->view($this->layout, $this->data);
    }

    public function hapus($id)
    {
        // Pastikan hanya admin yang bisa menghapus data kontak.
        if ($this->session->userdata('user_level') != 'administrator') {
            $this->session->set_flashdata('pesan_error', 'Anda tidak berhak menghapus data siswa. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa/error');
        }

        // Pastikan data siswa ada.
        if (! $this->siswa->get($id)) {
            $this->session->set_flashdata('pesan_error', 'Data siswa tidak ada. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa/error');
        }

        // Hapus
        if ($this->siswa->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus. Kembali ke halaman '. anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'Data gagal dihapus. Kembali ke halaman '. anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa/error');
        }
    }

    // Ubah status verifikasi
    public function ubah_status_verifikasi($id)
    {
        // Pastikan data siswa ada.
        $siswa = $this->siswa->get($id);
        if (! $siswa) {
            $this->session->set_flashdata('pesan_error', 'Data siswa tidak ada. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa/error');
        }

        // Ubah status verifikasi
        if ($this->siswa->ubah_status_verifikasi($id, $siswa->status_verifikasi)) {
            $this->session->set_flashdata('pesan', 'Status verifikasi berhasil diubah. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa/sukses');
        } else {
            $this->session->set_flashdata('pesan', 'Status verifikasi gagal diubah. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa/error');
        }
    }

    // Ubah status verifikasi
    public function ubah_status_seleksi($id)
    {
        // Pastikan data siswa ada.
        $siswa = $this->siswa->get($id);
        if (! $siswa) {
            $this->session->set_flashdata('pesan_error', 'Data siswa tidak ada. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa/error');
        }

        // Pastikan data sudah diverifikasi.
        if (! $siswa->status_verifikasi) {
            $this->session->set_flashdata('pesan_error', 'Data siswa <strong>belum diverifikasi</strong>. Untuk menentukan hasil-seleksi, data siswa harus diverifikasi dahulu. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa/error');
        }

        // Ubah status seleksi
        if ($this->siswa->ubah_status_seleksi($id, $siswa->status_seleksi)) {
            $this->session->set_flashdata('pesan', 'Status seleksi berhasil diubah. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa/sukses');
        } else {
            $this->session->set_flashdata('pesan', 'Status seleksi gagal diubah. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa');
        }
    }

    // Ubah status verifikasi
    public function ubah_status_pendaftaran($id)
    {
        // Pastikan data siswa ada.
        $siswa = $this->siswa->get($id);
        if (! $siswa) {
            $this->session->set_flashdata('pesan_error', 'Data siswa tidak ada. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa/error');
        }

        // Ubah status verifikasi
        if ($this->siswa->ubah_status_pendaftaran($id, $siswa->status_pendaftaran)) {
            $this->session->set_flashdata('pesan', 'Status pendaftaran berhasil diubah. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa/sukses');
        } else {
            $this->session->set_flashdata('pesan', 'Status pendaftaran gagal diubah. Kembali ke halaman ' . anchor('admin/siswa', 'siswa.', 'class="alert-link"'));
            redirect('admin/siswa/error');
        }
    }
}
