<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Sistem Akademik Sekolah PTIK</title>
<!-- pemanggilan CSS BOOTSTRAP, Favicon web , BOOTSTRAP DATEPICKER , CSS, dan Hovernav-->
 <link rel="shortcut icon" href="<?php echo base_url('asset/img/siak_icon.png');?>" />
    <link href="<?php echo base_url('asset/bootstrap_3_2_0/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap_3_2_0/css/bootstrap-theme.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/hovernav/hovernav.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap_datepicker/css/datepicker.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/style.css'); ?>" rel="stylesheet">
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="container">
 			<div id="row">
 				<div class="col-xs-12 col-md-6">
 					<h1>Sistem Akademik PTIK</h1>
 					<img src="<?php echo base_url('asset/img/img.png');?>">
 					</div>
 					<address>
 						<strong>SMK PTIK</strong><br>
 							JL Teratai II Blok E1 no.10 Taman Pagelaran Bogor<br>
 							Phone :083894867985 <br>
 							email : PTIK@gmail.com<br>
 					</address>
 				</div>
			</div>
		</div>
	</div>	
	<div id="navigasi">
		<?php
		$login_status=$this->session->userdata('login_status');
		$user_level=$this->session->userdata('user_level');
		if ($login_status === true && $user_level== 'siswa') {
		
			$this->load->view('dashboard/navbar');
		}
			else {
				$this->load->view('navbar');
			}
		
		?>
	</div>
	<div id="main-content">
		<?php $this->load->view($main_view); ?>
	</div>
	<div id="footer">
		<div id="container">
			<p class="text-muted">
				Dibuat oleh Mahasiswa Pend TIK
			</p>
			<p class="text-muted">
				Sistem Akademik ini dibuat sebagai Tugas Akhir Rancang Bangun Perangkat Lunak Harap Tidak Melakukan Pembajakan pada Sistem ini
			</p>
		</div>
	</div>
	</div>
 <script src="<?php echo base_url('asset/js/jquery-1.11.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/bootstrap_3_2_0/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/hovernav/hovernav.js'); ?>"></script>
    <script src="<?php echo base_url('asset/bootstrap_datepicker/js/bootstrap-datepicker.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/siak.js'); ?>"></script>


<noscript>
    <p class="noscript">Javascript pada browser Anda tidak diaktifkan. Silakan mengaktifkan Javascript.</p>
    <style type="text/css">
        #wrapper { display:none; }
        .noscript {
            text-align: center;
            color: #ff0000;
            font-size: 1.5em;
            vertical-align: 50%;
            margin: 250px;
            border: 1px solid;
        }
    </style>
</noscript>

</body>
</html>