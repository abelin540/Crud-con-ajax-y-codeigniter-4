
<!DOCTYPE html>
<html>
<head>
	<title> <?= $this->renderSection('titulo') ?></title>


	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome/css/all.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap4.min.css') ?>">
	
	<script>
      var base_url = '<?php echo base_url() ?>';
    </script>
</head>
<body>

	<div class="container">
		 <?= $this->renderSection('content') ?>
	</div>

