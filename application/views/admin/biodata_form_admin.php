<div class="container">
<h2>Biodata</h2>
<hr>

<?php echo form_open($form_action, array('id'=>'myform', 'class'=>'form-horizontal', 'role'=>'form')) ?>

    <!-- hidden field -->
    <?php echo form_hidden('id', $values->id);?>
    <?php echo form_hidden('nisn', $values->nisn);?>

    <h3 class="bg-success">A. Data Pribadi Siswa</h3>

    <!-- no_siswa -->
    <div class="form-group form-group-sm">
        <?php echo form_label('Nomor Siswa', 'no_siswa', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <p class="form-control-static"><?php echo format_no_siswa($values->id);?></p>
        </div>
    </div>

    <!-- nisn -->
    <div class="form-group form-group-sm">        
        <?php echo form_label('NISN', 'nisn', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <p class="form-control-static"><?php echo $values->nisn;?></p>
        </div>
    </div>

    <!-- nama -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('nama')?>">        
        <?php echo form_label('Nama', 'nama', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nama', $values->nama, 'id="nama" class="form-control" placeholder="Nama" maxlength="64"') ?>
            <?php set_validation_icon('nama') ?>
        </div>
        <?php if (form_error('nama')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nama', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- jenis_kelamin -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('jenis_kelamin')?>">
        <?php echo form_label('Jenis Kelamin', 'jenis_kelamin', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <label class="radio-inline" for="laki-laki">
                <?php echo form_radio('jenis_kelamin', 'L', (isset($values->jenis_kelamin) && $values->jenis_kelamin == 'L') ? true : false, 'id ="laki-laki"')?> Laki-laki
            </label>
            <label class="radio-inline" for="perempuan">
                <?php echo form_radio('jenis_kelamin', 'P', (isset($values->jenis_kelamin) && $values->jenis_kelamin == 'P') ? true : false, 'id ="perempuan"')?> Perempuan
            </label>
        </div>
        <?php if (form_error('jenis_kelamin')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('jenis_kelamin', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- agama -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('agama')?>">        
        <?php echo form_label('Agama', 'agama', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $agama = array(
                '' => '- Pilih -',
                '1' => 'Islam',
                '2' => 'Katolik',
                '3' => 'Protestan',
                '4' => 'Hindu',
                '5' => 'Budha',
                '6' => 'Konghucu',
                '0' => 'Lainnya',
            );
            $atribut_agama = 'class="form-control"';
            echo form_dropdown('agama', $agama, $values->agama, $atribut_agama);
            ?>
        </div>
        <?php if (form_error('agama')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('agama', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- ket_agama -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ket_agama')?>">
        <?php echo form_label('Keterangan Agama', 'ket_agama', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('ket_agama', $values->ket_agama, 'id="ket_agama" class="form-control" placeholder="Keterangan Agama" maxlength="32"') ?>
            <?php set_validation_icon('ket_agama') ?>
        </div>
        <?php if (form_error('ket_agama')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ket_agama', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tempat_lahir -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('tempat_lahir')?>">
        <?php echo form_label('Tempat Lahir', 'tempat_lahir', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('tempat_lahir', $values->tempat_lahir, 'id="tempat_lahir" class="form-control" placeholder="Tempat Lahir" maxlength="32"') ?>
            <?php set_validation_icon('tempat_lahir') ?>
        </div>
        <?php if (form_error('tempat_lahir')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tempat_lahir', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tanggal_lahir -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('tanggal_lahir')?>">        
        <?php echo form_label('Tanggal Lahir', 'tanggal_lahir', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group date" data-date-format="dd-mm-yyyy">
                <?php echo form_input('tanggal_lahir', date_to_id($values->tanggal_lahir), 'id="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" maxlength="10"') ?>
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <?php if (form_error('tanggal_lahir')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tanggal_lahir', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- berat_badan -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('berat_badan')?>">        
        <?php echo form_label('Berat Badan', 'berat_badan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group">
                <?php echo form_input('berat_badan', $values->berat_badan, 'id="berat_badan" class="form-control" placeholder="Berat Badan" maxlength="3"') ?>
                <span class="input-group-addon">kg</span>
            </div>
        </div>
        <?php if (form_error('berat_badan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('berat_badan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tinggi_badan -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('tinggi_badan')?>">        
        <?php echo form_label('Tinggi Badan', 'tinggi_badan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group">
                <?php echo form_input('tinggi_badan', $values->tinggi_badan, 'id="tinggi_badan" class="form-control" placeholder="Tinggi Badan" maxlength="3"') ?>
                <span class="input-group-addon">cm</span>
            </div>
        </div>
        <?php if (form_error('tinggi_badan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tinggi_badan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- golongan_darah -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('golongan_darah')?>">        
        <?php echo form_label('Golongan Darah', 'golongan_darah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <label class="radio-inline" for="O">
                <?php echo form_radio('golongan_darah', 'O', (isset($values->golongan_darah) && $values->golongan_darah == 'O') ? true : false, 'id ="O"')?> O
            </label>
            <label class="radio-inline" for="A">
                <?php echo form_radio('golongan_darah', 'A', (isset($values->golongan_darah) && $values->golongan_darah == 'A') ? true : false, 'id ="A"')?> A
            </label>
            <label class="radio-inline" for="B">
                <?php echo form_radio('golongan_darah', 'B', (isset($values->golongan_darah) && $values->golongan_darah == 'B') ? true : false, 'id ="B"')?> B
            </label>
            <label class="radio-inline" for="AB">
                <?php echo form_radio('golongan_darah', 'AB', (isset($values->golongan_darah) && $values->golongan_darah == 'AB') ? true : false, 'id ="AB"')?> AB
            </label>
        </div>
        <?php if (form_error('golongan_darah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('golongan_darah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- status_anak -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('status_anak')?>">
        <?php echo form_label('Status Anak', 'status_anak', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <label class="radio-inline" for="kandung">
                <?php echo form_radio('status_anak', '1', (isset($values->status_anak) && $values->status_anak == '1') ? true : false, 'id ="kandung"')?> Kandung
            </label>
            <label class="radio-inline" for="angkat">
                <?php echo form_radio('status_anak', '0', (isset($values->status_anak) && $values->status_anak == '0') ? true : false, 'id ="angkat"')?> Angkat
            </label>
        </div>
        <?php if (form_error('status_anak')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('status_anak', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- anak_ke -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('anak_ke')?>">        
        <?php echo form_label('Anak ke', 'anak_ke', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php echo form_input('anak_ke', $values->anak_ke, 'id="anak_ke" class="form-control" placeholder="Anak ke" maxlength="2"') ?>
            <?php set_validation_icon('anak_ke') ?>
        </div>
        <?php if (form_error('anak_ke')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('anak_ke', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- jumlah_saudara -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('jumlah_saudara')?>">        
        <?php echo form_label('Dari', 'jumlah_saudara', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php echo form_input('jumlah_saudara', $values->jumlah_saudara, 'id="jumlah_saudara" class="form-control" placeholder="Jumlah Saudara" maxlength="2"') ?>
            <?php set_validation_icon('jumlah_saudara') ?>
        </div>
        <?php if (form_error('jumlah_saudara')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('jumlah_saudara', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <h3 class="bg-success">B. Keterangan Tempat Tinggal</h3>
    <!-- tmp_tinggal_dengan -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('tmp_tinggal_dengan')?>">
        <?php echo form_label('Tinggal Dengan', 'tmp_tinggal_dengan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $tmp_tinggal_dengan = array(
                '' => '- Pilih -',
                '1' => 'Orang Tua',
                '2' => 'Kakak',
                '3' => 'Paman / Bibi',
                '4' => 'Kakek / Nenek',
                '0' => 'Lainnya',
            );
            $atribut_tmp_tinggal_dengan = 'class="form-control"';
            echo form_dropdown('tmp_tinggal_dengan', $tmp_tinggal_dengan, $values->tmp_tinggal_dengan, $atribut_tmp_tinggal_dengan);
            ?>
        </div>
        <?php if (form_error('tmp_tinggal_dengan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tmp_tinggal_dengan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tmp_ket_tinggal_dengan -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('tmp_ket_tinggal_dengan')?>">
        <?php echo form_label('Keterangan Tinggal Dengan', 'tmp_ket_tinggal_dengan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('tmp_ket_tinggal_dengan', $values->tmp_ket_tinggal_dengan, 'id="tmp_ket_tinggal_dengan" class="form-control" placeholder="Keterangan Tinggal Dengan..." maxlength="32"') ?>
            <?php set_validation_icon('tmp_ket_tinggal_dengan') ?>
        </div>
        <?php if (form_error('tmp_ket_tinggal_dengan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tmp_ket_tinggal_dengan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tmp_alamat -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('tmp_alamat')?>">
        <?php echo form_label('Alamat', 'tmp_alamat', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-5">
            <?php echo form_textarea('tmp_alamat', $values->tmp_alamat, 'class="form-control" id="tmp_alamat" placeholder="Alamat Tinggal"') ?>
        </div>
        <?php if (form_error('tmp_alamat')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tmp_alamat', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tmp_telepon -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('tmp_telepon')?>">        
        <?php echo form_label('Telepon', 'tmp_telepon', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('tmp_telepon', $values->tmp_telepon, 'id="tmp_telepon" class="form-control" placeholder="Telepon Tempat Tinggal" maxlength="16"') ?>
            <?php set_validation_icon('tmp_telepon') ?>
        </div>
        <?php if (form_error('tmp_telepon')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tmp_telepon', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tmp_jarak_sekolah -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('tmp_jarak_sekolah')?>">
        <?php echo form_label('Jarak ke Sekolah', 'tmp_jarak_sekolah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group">
                <?php echo form_input('tmp_jarak_sekolah', $values->tmp_jarak_sekolah, 'id="tmp_jarak_sekolah" class="form-control" placeholder="Jarak ke Sekolah" maxlength="2"') ?>
                <span class="input-group-addon">km</span>
            </div>
        </div>
        <?php if (form_error('tmp_jarak_sekolah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tmp_jarak_sekolah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tmp_kendaraan -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('tmp_kendaraan')?>">
        <?php echo form_label('Pergi ke Sekolah dengan Kendaraan', 'tmp_kendaraan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $tmp_kendaraan = array(
                '' => '- Pilih -',
                '1' => 'Berjalan Kakki',
                '2' => 'Sepeda',
                '3' => 'Angkutan Umum',
                '4' => 'Sepeda Motor',
                '5' => 'Mobil',
            );
            $atribut_tmp_kendaraan = 'class="form-control"';
            echo form_dropdown('tmp_kendaraan', $tmp_kendaraan, $values->tmp_kendaraan, $atribut_tmp_kendaraan);
            ?>
        </div>
        <?php if (form_error('tmp_kendaraan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tmp_kendaraan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <h3 class="bg-success">C. Data Orang Tua Siswa</h3>
    <!-- ort_ayah -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ort_nama_ayah')?>">
        <?php echo form_label('Nama Ayah', 'ort_nama_ayah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('ort_nama_ayah', $values->ort_nama_ayah, 'id="ort_nama_ayah" class="form-control" placeholder="Nama Ayah" maxlength="64"') ?>
            <?php set_validation_icon('ort_nama_ayah') ?>
        </div>
        <?php if (form_error('ort_nama_ayah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ort_nama_ayah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- ort_pekerjaan_ayah -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ort_pekerjaan_ayah')?>">
        <?php echo form_label('Pekerjaan Ayah', 'ort_pekerjaan_ayah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $ort_pekerjaan_ayah = array(
                '' => '- Pilih -',
                '1' => 'PNS',
                '2' => 'TNI / POLRI',
                '3' => 'Petani / Nelayan',
                '4' => 'Buruh',
                '5' => 'Pedagang / Wiraswasta',
                '6' => 'Tukang Ojek / becak',
                '7' => 'Sopir',
                '0' => 'Lainnya',
            );
            $atribut_ort_pekerjaan_ayah = 'class="form-control"';
            echo form_dropdown('ort_pekerjaan_ayah', $ort_pekerjaan_ayah, $values->ort_pekerjaan_ayah, $atribut_ort_pekerjaan_ayah);
            ?>
        </div>
        <?php if (form_error('ort_pekerjaan_ayah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ort_pekerjaan_ayah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- ort_ket_pekerjaan_ayah -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ort_ket_pekerjaan_ayah')?>">
        <?php echo form_label('Keterangan Pekerjaan Ayah', 'ort_ket_pekerjaan_ayah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">            
            <?php echo form_input('ort_ket_pekerjaan_ayah', $values->ort_ket_pekerjaan_ayah, 'id="ort_ket_pekerjaan_ayah" class="form-control" placeholder="Keterangan Pekerjaan Ayah" maxlength="32"') ?>
            <?php set_validation_icon('ort_ket_pekerjaan_ayah') ?>
        </div>
        <?php if (form_error('ort_ket_pekerjaan_ayah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ort_ket_pekerjaan_ayah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- ort_nama_ibu -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ort_nama_ibu')?>">        
        <?php echo form_label('Nama Ibu', 'ort_nama_ibu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('ort_nama_ibu', $values->ort_nama_ibu, 'id="ort_nama_ibu" class="form-control" placeholder="Nama Ibu" maxlength="64"') ?>
            <?php set_validation_icon('ort_nama_ibu') ?>
        </div>
        <?php if (form_error('ort_nama_ibu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ort_nama_ibu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- ort_pekerjaan_ibu -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ort_pekerjaan_ibu')?>">
        <?php echo form_label('Pekerjaan Ibu', 'ort_pekerjaan_ibu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $ort_pekerjaan_ibu = array(
                '' => '- Pilih -',
                '8' => 'Ibu Rumah Tangga (Tidak Bekerja)',
                '1' => 'PNS',
                '2' => 'TNI / POLRI',
                '3' => 'Petani / Nelayan',
                '4' => 'Buruh',
                '5' => 'Pedagang / Wiraswasta',
                '6' => 'Tukang Ojek / becak',
                '7' => 'Sopir',
                '0' => 'Lainnya',
            );
            $atribut_ort_pekerjaan_ibu = 'class="form-control"';
            echo form_dropdown('ort_pekerjaan_ibu', $ort_pekerjaan_ibu, $values->ort_pekerjaan_ibu, $atribut_ort_pekerjaan_ibu);
            ?>
        </div>
        <?php if (form_error('ort_pekerjaan_ibu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ort_pekerjaan_ibu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- ort_ket_pekerjaan_ibu -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ort_ket_pekerjaan_ibu')?>">
        <?php echo form_label('Keterangan Pekerjaan Ibu', 'ort_ket_pekerjaan_ibu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('ort_ket_pekerjaan_ibu', $values->ort_ket_pekerjaan_ibu, 'id="ort_ket_pekerjaan_ibu" class="form-control" placeholder="Keterangan Pekerjaan Ibu" maxlength="32"') ?>
            <?php set_validation_icon('ort_ket_pekerjaan_ibu') ?>
        </div>
        <?php if (form_error('ort_ket_pekerjaan_ibu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ort_ket_pekerjaan_ibu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- ort_alamat -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ort_alamat')?>">
        <?php echo form_label('Alamat', 'ort_alamat', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-5">
            <?php echo form_textarea('ort_alamat', $values->ort_alamat, 'class="form-control" id="ort_alamat" placeholder="Alamat Orang Tua"') ?>
        </div>
        <?php if (form_error('ort_alamat')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ort_alamat', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- ort_telepon -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ort_telepon')?>">        
        <?php echo form_label('Telepon', 'ort_telepon', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">            
            <?php echo form_input('ort_telepon', $values->ort_telepon, 'id="ort_telepon" class="form-control" placeholder="Telepon Orang Tua" maxlength="16"') ?>
            <?php set_validation_icon('ort_telepon') ?>
        </div>
        <?php if (form_error('ort_telepon')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ort_telepon', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- ort_penghasilan -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ort_penghasilan')?>">        
        <?php echo form_label('Penghasilan Orang Tua', 'ort_penghasilan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <div class="input-group">
                <?php echo form_input('ort_penghasilan', $values->ort_penghasilan, 'id="ort_penghasilan" class="form-control" placeholder="Penghasilan Orang Tua" maxlength="12"') ?>
                <span class="input-group-addon">,00</span>
            </div>
        </div>
        <?php if (form_error('ort_penghasilan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ort_penghasilan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>


    <h3 class="bg-success">D. Keterangan Pendidikan Sebelumnya</h3>
    <!-- ska_nama -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ska_nama')?>">
        <?php echo form_label('Nama Sekolah', 'ska_nama', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('ska_nama', $values->ska_nama, 'id="ska_nama" class="form-control" placeholder="Nama Sekolah" maxlength="64"') ?>
            <?php set_validation_icon('ska_nama') ?>
        </div>
        <?php if (form_error('ska_nama')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ska_nama', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- ska_status -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ska_status')?>">
        <?php echo form_label('Status', 'ska_status', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <label class="radio-inline" for="negeri">
                <?php echo form_radio('ska_status', '1', (isset($values->ska_status) && $values->ska_status == '1') ? true : false, 'id ="negeri"')?> Negeri
            </label>
            <label class="radio-inline" for="swasta">
                <?php echo form_radio('ska_status', '0', (isset($values->ska_status) && $values->ska_status == '0') ? true : false, 'id ="swasta"')?> Swasta
            </label>
        </div>
        <?php if (form_error('ska_status')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ska_status', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- ska_alamat -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ska_alamat')?>">
        <?php echo form_label('Alamat', 'ska_alamat', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-5">
            <?php echo form_textarea('ska_alamat', $values->ska_alamat, 'class="form-control" id="ska_alamat" placeholder="Alamat Sekolah"') ?>
        </div>
        <?php if (form_error('ska_alamat')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ska_alamat', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- ska_telepon -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ska_telepon')?>">        
        <?php echo form_label('Telepon', 'ska_telepon', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">            
            <?php echo form_input('ska_telepon', $values->ska_telepon, 'id="ska_telepon" class="form-control" placeholder="Telepon Sekolah" maxlength="16"') ?>
            <?php set_validation_icon('ska_telepon') ?>
        </div>
        <?php if (form_error('ska_telepon')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ska_telepon', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- ska_kelas -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ska_kelas')?>">        
        <?php echo form_label('Kelas Asal', 'ska_kelas', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">            
            <?php echo form_input('ska_kelas', $values->ska_kelas, 'id="ska_telepon" class="form-control" placeholder="Kelas Asal" maxlength="32"') ?>
            <?php set_validation_icon('ska_kelas') ?>
        </div>
        <?php if (form_error('ska_kelas')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ska_kelas', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>
    <!-- ska_no_ijazah -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('ska_no_ijazah')?>">        
        <?php echo form_label('Nomor Ijazah', 'ska_no_ijazah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('ska_no_ijazah', $values->ska_no_ijazah, 'id="ska_no_ijazah" class="form-control" placeholder="Nomor Ijazah" maxlength="32"') ?>
            <?php set_validation_icon('ska_no_ijazah') ?>
        </div>
        <?php if (form_error('ska_no_ijazah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('ska_no_ijazah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-3">
            <?php echo form_button(array('content'=>'Simpan', 'type'=>'submit', 'class'=>'btn btn-primary', 'data-confirm'=>'Anda yakin akan menyimpan data ini?')) ?>
        </div>
    </div>

<?php echo form_close() ?>

</div>
