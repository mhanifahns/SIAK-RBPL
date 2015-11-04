<?php
class Nilai_model extends MY_Model
{
    protected $_tabel = 'tb_siswa';

    public $form_rules = array(

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
            'field' => 'nil_bing_1',
            'label' => 'Nilai Bahasa Inggris Semester 1',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_bing_2',
            'label' => 'Nilai Bahasa Inggris Semester 2',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_bing_3',
            'label' => 'Nilai Bahasa Inggris Semester 3',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_bing_4',
            'label' => 'Nilai Bahasa Inggris Semester 4',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_bing_5',
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
        // WEB
        array(
            'field' => 'nil_web_1',
            'label' => 'Nilai WEB Semester 1',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_web_2',
            'label' => 'Nilai WEB Semester 2',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_web_3',
            'label' => 'Nilai WEB Semester 3',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_web_4',
            'label' => 'Nilai WEB Semester 4',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_web_5',
            'label' => 'Nilai WEB Semester 5',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        // SENI
        array(
            'field' => 'nil_seni_1',
            'label' => 'Nilai SENI Semester 1',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_seni_2',
            'label' => 'Nilai SENI Semester 2',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_seni_3',
            'label' => 'Nilai SENI Semester 3',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_seni_4',
            'label' => 'Nilai SENI Semester 4',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
        array(
            'field' => 'nil_seni_5',
            'label' => 'Nilai SENI Semester 5',
            'rules' => 'trim|xss_clean|required|max_length[3]|greater_than[0]'
        ),
    );

 public function simpan($siswa)
    {
        $siswa = (object)$siswa;
        
        return $this->update($siswa->id, $siswa);

    }
}
