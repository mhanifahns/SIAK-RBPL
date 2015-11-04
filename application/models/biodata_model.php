<?php
class Biodata_model extends MY_Model
{
    protected $_tabel = 'tb_siswa';

    public $form_rules = array(
        // Data Pribadi ----------------------------------------------------
        array(
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'trim|xss_clean|required|max_length[64]'
        ),
        array(
            'field' => 'jenis_kelamin',
            'label' => 'Jenis Kelamin',
            'rules' => 'trim|xss_clean|required'
        ),
        array(
            'field' => 'agama',
            'label' => 'Agama',
            'rules' => 'trim|xss_clean|required|callback__cek_agama'
        ),
        array(
            'field' => 'ket_agama',
            'label' => 'Keterangan Agama',
            'rules' => 'trim|xss_clean|max_length[32]|callback__cek_ket_agama'
        ),
        array(
            'field' => 'tempat_lahir',
            'label' => 'Tempat Lahir',
            'rules' => 'trim|xss_clean|required|max_length[32]'
        ),
        array(
            'field' => 'tanggal_lahir',
            'label' => 'Tanggal Lahir',
            'rules' => 'trim|xss_clean|required|max_length[10]|callback__format_tanggal'
        ),
        array(
            'field' => 'berat_badan',
            'label' => 'Berat Badan',
            'rules' => 'trim|xss_clean|required|numeric|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'tinggi_badan',
            'label' => 'Tinggi Badan',
            'rules' => 'trim|xss_clean|required|numeric|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'golongan_darah',
            'label' => 'Golongan Darah',
            'rules' => 'trim|xss_clean|required'
        ),
        array(
            'field' => 'status_anak',
            'label' => 'Status Anak',
            'rules' => 'trim|xss_clean|required'
        ),
        array(
            'field' => 'anak_ke',
            'label' => 'Anak ke',
            'rules' => 'trim|xss_clean|required|numeric|max_length[2]'
        ),
        array(
            'field' => 'jumlah_saudara',
            'label' => 'Jumlah Saudara',
            'rules' => 'trim|xss_clean|required|numeric|max_length[2]'
        ),
        // Tempat tinggal -------------------------------------------------------
        array(
            'field' => 'tmp_tinggal_dengan',
            'label' => 'Tinggal Dengan',
            'rules' => 'trim|xss_clean|required|callback__tmp_tinggal_dengan'
        ),
        array(
            'field' => 'tmp_ket_tinggal_dengan',
            'label' => 'Ket Tinggal Dengan',
            'rules' => 'trim|xss_clean|max_length[32]|callback__tmp_ket_tinggal_dengan'
        ),
        array(
            'field' => 'tmp_alamat',
            'label' => 'Alamat Tinggal',
            'rules' => 'trim|xss_clean|required|max_length[255]'
        ),
        array(
            'field' => 'tmp_telepon',
            'label' => 'Telepon Tempat Tinggal',
            'rules' => 'trim|xss_clean|required|max_length[16]'
        ),
        array(
            'field' => 'tmp_jarak_sekolah',
            'label' => 'Jarak ke Sekolah',
            'rules' => 'trim|xss_clean|required|numeric|max_length[2]'
        ),
        array(
            'field' => 'tmp_kendaraan',
            'label' => 'Kendaraan',
            'rules' => 'trim|xss_clean|required|callback_clbk_tmp_kendaraan'
        ),
        // Orang tua -------------------------------------------------------
        array(
            'field' => 'ort_nama_ayah',
            'label' => 'Nama Ayah',
            'rules' => 'trim|xss_clean|required|max_length[64]'
        ),
        array(
            'field' => 'ort_pekerjaan_ayah',
            'label' => 'Pekerjaan Ayah',
            'rules' => 'trim|xss_clean|required|callback__ort_pekerjaan_ayah'
        ),
        array(
            'field' => 'ort_ket_pekerjaan_ayah',
            'label' => 'Keterangan Pekerjaan Ayah',
            'rules' => 'trim|xss_clean|max_length[32]|callback__ort_ket_pekerjaan_ayah'
        ),
        array(
            'field' => 'ort_nama_ibu',
            'label' => 'Nama Ibu',
            'rules' => 'trim|xss_clean|required|max_length[64]'
        ),
        array(
            'field' => 'ort_pekerjaan_ibu',
            'label' => 'Pekerjaan Ibu',
            'rules' => 'trim|xss_clean|required|callback__ort_pekerjaan_ibu'
        ),
        array(
            'field' => 'ort_ket_pekerjaan_ibu',
            'label' => 'Keterangan Pekerjaan Ibu',
            'rules' => 'trim|xss_clean|max_length[32]|callback__ort_ket_pekerjaan_ibu'
        ),
        array(
            'field' => 'ort_alamat',
            'label' => 'Alamat Orang Tua',
            'rules' => 'trim|xss_clean|required|max_length[255]'
        ),
        array(
            'field' => 'ort_telepon',
            'label' => 'Telepon Orang Tua',
            'rules' => 'trim|xss_clean|required|max_length[256]'
        ),
        array(
            'field' => 'ort_penghasilan',
            'label' => 'Penghasilan Orang Tua',
            'rules' => 'trim|xss_clean|required|max_length[12]'
        ),
        // Sekolah Asal -------------------------------------------------------
        array(
            'field' => 'ska_nama',
            'label' => 'Nama Sekolah Asal',
            'rules' => 'trim|xss_clean|required|max_length[64]'
        ),
        array(
            'field' => 'ska_status',
            'label' => 'Status Sekolah Asal',
            'rules' => 'trim|xss_clean|required'
        ),
        array(
            'field' => 'ska_alamat',
            'label' => 'Alamat Sekolah Asal',
            'rules' => 'trim|xss_clean|required|max_length[255]'
        ),
        array(
            'field' => 'ska_telepon',
            'label' => 'Telepon Sekolah',
            'rules' => 'trim|xss_clean|required|max_length[16]'
        ),
        array(
            'field' => 'ska_kelas',
            'label' => 'Kelas Asal',
            'rules' => 'trim|xss_clean|required|max_length[32]'
        ),
        array(
            'field' => 'ska_no_ijazah',
            'label' => 'No Ijazah',
            'rules' => 'trim|xss_clean|required|max_length[32]'
        ),
        array(
            'field' => 'nil_bin_1',
            'label' => 'Nilai Bahasa Indonesia Semester 1',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_bin_2',
            'label' => 'Nilai Bahasa Indonesia Semester 2',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_bin_3',
            'label' => 'Nilai Bahasa Indonesia Semester 3',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_bin_4',
            'label' => 'Nilai Bahasa Indonesia Semester 4',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_bin_5',
            'label' => 'Nilai Bahasa Indonesia Semester 5',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        // Bahasa Inggris
        array(
            'field' => 'nil_big_1',
            'label' => 'Nilai Bahasa Inggris Semester 1',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_big_2',
            'label' => 'Nilai Bahasa Inggris Semester 2',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_big_3',
            'label' => 'Nilai Bahasa Inggris Semester 3',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_big_4',
            'label' => 'Nilai Bahasa Inggris Semester 4',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_big_5',
            'label' => 'Nilai Bahasa Inggris Semester 5',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        // Matematika
        array(
            'field' => 'nil_mat_1',
            'label' => 'Nilai Matematika Semester 1',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_mat_2',
            'label' => 'Nilai Matematika Semester 2',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_mat_3',
            'label' => 'Nilai Matematika Semester 3',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_mat_4',
            'label' => 'Nilai Matematika Semester 4',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_mat_5',
            'label' => 'Nilai Matematika Semester 5',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        // IPA
        array(
            'field' => 'nil_ipa_1',
            'label' => 'Nilai IPA Semester 1',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_ipa_2',
            'label' => 'Nilai IPA Semester 2',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_ipa_3',
            'label' => 'Nilai IPA Semester 3',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_ipa_4',
            'label' => 'Nilai IPA Semester 4',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_ipa_5',
            'label' => 'Nilai IPA Semester 5',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        // IPS
        array(
            'field' => 'nil_ips_1',
            'label' => 'Nilai IPS Semester 1',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_ips_2',
            'label' => 'Nilai IPS Semester 2',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_ips_3',
            'label' => 'Nilai IPS Semester 3',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_ips_4',
            'label' => 'Nilai IPS Semester 4',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_ips_5',
            'label' => 'Nilai IPS Semester 5',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
    );

    public function simpan($siswa)
    {
        $siswa = (object)$siswa;

        // Set status biodata.
        $siswa->status_biodata = '1';

        // Ubah tanggal lahir ke format yyyy-mm-dd
        $siswa->tanggal_lahir = date_to_en($siswa->tanggal_lahir);

        // Format huruf depan kapital sebelum disimpan
        $siswa->nama = format_title_case($siswa->nama);
        $siswa->ket_agama = format_title_case($siswa->ket_agama);
        $siswa->tempat_lahir = format_title_case($siswa->tempat_lahir);
        $siswa->tmp_ket_tinggal_dengan = format_title_case($siswa->tmp_ket_tinggal_dengan);
        $siswa->ort_nama_ayah = format_title_case($siswa->ort_nama_ayah);
        $siswa->ort_nama_ibu = format_title_case($siswa->ort_nama_ibu);
        $siswa->ska_nama = format_title_case($siswa->ska_nama);
        $siswa->tmp_alamat = format_title_case($siswa->tmp_alamat);
        $siswa->ort_alamat = format_title_case($siswa->ort_alamat);
        $siswa->ska_alamat = format_title_case($siswa->ska_alamat);

        // Jika agama dipilih, set keterangan agama null
        if ($siswa->agama != '0') {
            $siswa->ket_agama = null;
        }

        // Jika tinggal dengan dipilih, set keterangan tinggal dengan null
        if ($siswa->tmp_tinggal_dengan != '0') {
            $siswa->tmp_ket_tinggal_dengan = null;
        }

        // Jika pekerjaan ayah dipilih, set keterangan pekerjaan ayah dengan null
        if ($siswa->ort_pekerjaan_ayah != '0') {
            $siswa->ort_ket_pekerjaan_ayah = null;
        }

        // Jika pekerjaan ibu dipilih, set keterangan pekerjaan ibu dengan null
        if ($siswa->ort_pekerjaan_ibu != '0') {
            $siswa->ort_ket_pekerjaan_ibu = null;
        }

        // Nilai rata-rata tiap pelajaran
        $siswa->nil_bin_rata = array_sum(array($siswa->nil_bin_1, $siswa->nil_bin_2, $siswa->nil_bin_3, $siswa->nil_bin_4, $siswa->nil_bin_5,)) / 5;
        $siswa->nil_big_rata = array_sum(array($siswa->nil_big_1, $siswa->nil_big_2, $siswa->nil_big_3, $siswa->nil_big_4, $siswa->nil_big_5,)) / 5;
        $siswa->nil_mat_rata = array_sum(array($siswa->nil_mat_1, $siswa->nil_mat_2, $siswa->nil_mat_3, $siswa->nil_mat_4, $siswa->nil_mat_5,)) / 5;
        $siswa->nil_ipa_rata = array_sum(array($siswa->nil_ipa_1, $siswa->nil_ipa_2, $siswa->nil_ipa_3, $siswa->nil_ipa_4, $siswa->nil_ipa_5,)) / 5;
        $siswa->nil_ips_rata = array_sum(array($siswa->nil_ips_1, $siswa->nil_ips_2, $siswa->nil_ips_3, $siswa->nil_ips_4, $siswa->nil_ips_5,)) / 5;

        return $this->update($siswa->id, $siswa);

    }
}
