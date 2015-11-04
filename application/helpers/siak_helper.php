<?php
// Konversi waktu ke : Senin, 4 Januari 2014
function format_hari_tanggal($waktu)
{
    // Senin, Selasa dst.
    $hari_array = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );
    $hr = date('w', strtotime($waktu));
    $hari = $hari_array[$hr];

    // Tanggal: 1-31 dst, tanpa leading zero.
    $tanggal = date('j', strtotime($waktu));

    // Bulan: Januari, Maret dst.
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];

    // Tahun, 4 digit.
    $tahun = date('Y', strtotime($waktu));

    // Hasil akhir: Senin, 1 Oktober 2014
    return "$hari, $tanggal $bulan $tahun";
}

// Format tangal ke 1 Januari 1990
function format_tanggal($waktu)
{
    // Tanggal, 1-31 dst, tanpa leading zero.
    $tanggal = date('j', strtotime($waktu));

    // Bulan, Januari, Maret dst
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];

    // Tahun
    $tahun = date('Y', strtotime($waktu));

    // Senin, 12 Oktober 2014
    return "$tanggal $bulan $tahun";
}

// Format tangal ke yyyy-mm-dd
function date_to_en($tanggal)
{
    $tgl = date('Y-m-d', strtotime($tanggal));
    if ($tgl == '1970-01-01') {
        return '';
    } else {
        return $tgl;
    }
}

// Format tangal ke dd-mm-yyyy
function date_to_id($tanggal)
{
    $tgl = date('d-m-Y', strtotime($tanggal));
    if ($tgl == '01-01-1970') {        
        return '';
    } else {
        return $tgl;
    }
}

// Format nomor siswa ke 20140001
function format_no_siswa($no)
{
    // Ambil nilai prefix dari file konfigurasi "psb.php"
    $prefix = config_item('psb_prefix_no_siswa');    
    $leadingzeros = '0000';
    $no_siswa = $prefix . substr($leadingzeros, 0, (-strlen($no))) . $no;
    return $no_siswa;
}

// Mendapatkan nilai interger no_siswa
function get_no_siswa_value($no_siswa)
{
    return intval(substr($no_siswa, 4, 4));
}


// Buat setiap awal kata huruf besar
function format_title_case($string)
{
    return ucwords($string);
}

function format_pekerjaan($pekerjaan)
{
    if ($pekerjaan == '0') {
        return 'Lainnya';
    } elseif ($pekerjaan == '1') {
        return 'PNS';
    } elseif ($pekerjaan == '2') {
        return 'TNI / POLRI';
    } elseif ($pekerjaan == '3') {
        return 'Petani / Nelayan';
    } elseif ($pekerjaan == '4') {
        return 'Buruh';
    } elseif ($pekerjaan == '5') {
        return 'Pedagang / Wiraswasta';
    } elseif ($pekerjaan == '6') {
        return 'Tukang Ojek / Becak';
    } elseif ($pekerjaan == '7') {
        return 'Sopir';
    } elseif ($pekerjaan == '8') {
        return 'Ibu Rumah Tangga (Tidak Bekerja)';
    } else {
        return ucwords($pekerjaan);
    }
}

function format_kendaraan($kendaraan)
{
    if ($kendaraan == '1') {
        return 'Berjalan Kaki';
    } elseif ($kendaraan == '2') {
        return 'Sepeda';
    } elseif ($kendaraan == '3') {
        return 'Angkutan Umum';
    } elseif ($kendaraan == '4') {
        return 'Sepeda Motor';
    } else {
        return 'Mobil';
    }
}

function format_jenis_kelamin($kelamin)
{
    if ($kelamin == 'L') {
        return 'Laki-laki';
    } else {
        return 'Perempuan';
    }
}

function format_status_anak($status)
{
    if ($status == '0') {
        return 'Angkat';
    } else {
        return 'Kandung';
    }
}

function format_status_sekolah($status)
{
    if ($status == '0') {
        return 'Swasta';
    } else {
        return 'Negeri';
    }
}

function format_status_pendaftaran($status)
{
    if ($status == '0') {
        return 'Mundur';
    } else {
        return 'Aktif';
    }
}

function format_status_biodata($status)
{
    if ($status == '0') {
        return 'Belum Lengkap';
    } else {
        return 'Lengkap';
    }
}

function format_status_seleksi($status)
{
    if ($status == '0') {
        return 'Tidak Lulus';
    } else {
        return 'Lulus';
    }
}

function format_status_verifikasi($status)
{
    if ($status == '0') {
        return 'Belum';
    } else {
        return 'Sudah';
    }
}

function format_agama($agama)
{
    if ($agama == '0') {
        return 'Lainnya';
    } elseif ($agama == '1') {
        return 'Islam';
    } elseif ($agama == '2') {
        return 'Katolik';
    } elseif ($agama == '3') {
        return 'Protestan';
    } elseif ($agama == '4') {
        return 'Hindu';
    } elseif ($agama == '5') {
        return 'Budha';
    } elseif ($agama == '6') {
        return 'Konghucu';
    } else {
        return ucwords($agama);
    }
}

function format_tinggal($ket)
{
    if ($ket == '0') {
        return 'Lainnya';
    } elseif ($ket == '1') {
        return 'Orang Tua';
    } elseif ($ket == '2') {
        return 'Kakak';
    } elseif ($ket == '3') {
        return 'Paman / Bibi';
    } elseif ($ket == '4') {
        return 'Kakek / Nenek';
    } else {
        return ucwords($ket);
    }
}

function format_penghasilan($penghasilan)
{
    return number_format($penghasilan, 2, ',', '.' );
}

function format_is_blokir($status)
{
    if ($status == '1') {
        return 'BLOKIR';
    } else {
        return 'AKTIF';
    }
}