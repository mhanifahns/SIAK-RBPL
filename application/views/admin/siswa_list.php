<?php
// Nomor urut data di tabel.
$per_page = 2;

// Posisi nomor halaman (untuk paging) jika user login / tidak.
$login_status = $this->session->userdata('login_status');
$user_level = $this->session->userdata('user_level');
$page = $this->uri->segment(4);

// Nomor urut data di tabel.
// Ini karena library pagination menggunakan option 'use_page_numbers' => true.
if (empty($page)) {
    $offset = 0;
} else {
    $offset = ($page * $per_page - $per_page);
}
?>

<div class="container">
    <h2>Data Siswa</h2>
    <hr>

    <!-- Paging dan form pencarian -->
    <div class="row navigasi_cari">
        <!-- Paging -->
        <div class="col-xs-12 col-md-6">
            <?php echo (!empty($paging)) ? $paging : ''?>
        </div>
        <!-- /Paging -->

        <!-- Form Pencarian -->
        <div class="col-xs-12 col-md-4 pull-right">
            <form method="get" action="<?php echo site_url('admin/siswa/cari');?>" role="form" class="form-horizontal">
                <div class="input-group">
                    <input type="text" name="kata_kunci" class="form-control" placeholder="Masukkan Nomor Perserta, NISN atau Nama" id="kata_kunci" value="<?php echo $this->input->get('kata_kunci')?>">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /Form Pencarian -->
    </div>
    <!-- /Paging dan form pencarian -->

    <?php if (!empty($siswa) && is_array($siswa)): ?>
    <div class="row">
        <div class="col-md-12">

            <table class="table table-striped table-bordered table-hover table-condensed">
                <thead>
                <tr>
                    <th>No</th>
                    <th>No Siswa</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Asal Sekolah</th>
                    <th>Status Pendaftaran</th>
                    <th>Status Biodata</th>
                    <th>Status Verifikasi</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($siswa as $row): ?>
                    <?php
                    // Link edit, hapus, cetak
                    $link_edit = anchor('admin/biodata/edit/'.$row->id, '<span class="glyphicon glyphicon-edit"></span>', array('title' => 'Edit'));
                    $link_hapus = anchor('admin/siswa/hapus/'.$row->id,'<span class="glyphicon glyphicon-trash"></span>', array('title' => 'Hapus', 'data-confirm' => 'Anda yakin akan menghapus data ini?'));
                    $link_cetak = anchor('admin/siswa/cetak/'.$row->id,'<span class="glyphicon glyphicon-print"></span>', array('title' => 'Cetak'));
                    $link_nilai = anchor('admin/nilai/edit/'.$row->id,'<span class="glyphicon glyphicon-pencil"></span>', array('title' => 'Input Nilai'));

                    // Status pendaftaran
                    if ($row->status_pendaftaran == '0') {
                        $pendaftaran = '<td class="status-danger">' . anchor('admin/siswa/ubah-status-pendaftaran/'.$row->id, format_status_pendaftaran($row->status_pendaftaran), 'data-confirm="Mengubah status pendaftaran ke AKTIF"') . '</td>';
                    } else {
                        $pendaftaran = '<td class="status-biasa">' . anchor('admin/siswa/ubah-status-pendaftaran/'.$row->id, format_status_pendaftaran($row->status_pendaftaran), 'data-confirm="Mengubah status pendaftaran ke MUNDUR"') . '</td>';
                    }

                    // Status biodata
                    if ($row->status_biodata == '0') {
                        $biodata = '<td class="status-danger">' . format_status_biodata($row->status_biodata) . '</td>';
                    } else {
                        $biodata = '<td class="status-biasa">' . format_status_biodata($row->status_biodata) . '</td>';
                    }
                    
                    // Status verifikasi
                    if ($row->status_verifikasi == '0') {
                        $verifikasi = '<td class="status-danger">' . anchor('admin/siswa/ubah-status-verifikasi/'.$row->id, format_status_verifikasi($row->status_verifikasi), 'data-confirm="Mengubah status verifikasi ke SUDAH?"') . '</td>';
                    } else {
                        $verifikasi = '<td class="status-biasa">' . anchor('admin/siswa/ubah-status-verifikasi/'.$row->id, format_status_verifikasi($row->status_verifikasi), 'data-confirm="Mengubah status verifikasi ke BELUM?"')  . '</td>';
                    }


                    ?>
                    <tr>
                        <td><?php echo ++$offset ?></td>
                        <td><?php echo format_no_siswa($row->id) ?></td>
                        <td><?php echo $row->nisn ?></td>
                        <td><?php echo format_title_case($row->nama) ?></td>
                        <td><?php echo format_title_case($row->ska_nama) ?></td>
                        <?php echo $pendaftaran ?>
                        <?php echo $biodata ?>
                        <?php echo $verifikasi ?>
                       
                        <td>
                            <?php echo $user_level == 'operator' ? $link_edit.'&nbsp;&nbsp;&nbsp;&nbsp;'.$link_hapus.'&nbsp;&nbsp;&nbsp;&nbsp;'.$link_nilai.'&nbsp;&nbsp;&nbsp;&nbsp;'.$link_cetak : $link_cetak ?>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
    <?php else: ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible" role="alert">
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <?php echo $siswa ?>
            </div>
        </div>
    </div>
    <?php endif ?>

</div> <!-- /container -->
