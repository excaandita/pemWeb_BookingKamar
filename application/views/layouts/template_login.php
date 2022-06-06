<!doctype html>
<html lang="en">
  <head>
  <?php echo $title;?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url().'assets/login/font-awesome.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/login/bootstrap.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/login/style.css'?>">

	</head>
	<body>
    <?php
        // Cetak jika ada notifikasi
        if($this->session->flashdata('sukses')) {
        echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
        }
    ?>
	<section class="ftco-section">
    <?php echo $contents;?>
	</section>

  <script src="<?php echo base_url().'assets/login/js/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/login/js/popper.js'?>"></script>
  <script src="<?php echo base_url().'assets/login/js/bootstrap.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/login/js/main.js'?>"></script>
</body>
</html>

