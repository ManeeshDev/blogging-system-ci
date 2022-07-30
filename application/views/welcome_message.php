<!--
	@author maneesh
 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Blogging System</title>

	<style type="text/css">
		body{
			background-image: url("<?php echo base_url('assets/image/bg-1.png');?>") !important;
			/*background-image: url("<?php //echo base_url();?>assets/image/bg-1.png") !important;*/
			/*background-image: url("assets/image/bg-1.png") !important;*/
			background-position: fixed;
			background-repeat: no-repeat;
			background-size: cover;
			background-color: red;
		}
		*{color: #ccc;}
	</style>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>" />

<!-- -----------------bootswatch.com/lux/------------------------- -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" />

<!-- -----------------getbootstrap.com/CDN------------------------- -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

</head>
<body>

<br>
<div class="container">
	<div class="row">
		<h1 class="text-info" >BLOGGING SYSTEM</h1>
	</div>
</div>

<div class="container">
	<hr><br>
	<div class="row">
		<div class="col">
			<?php echo form_open('welcome/signin');?>
			  <fieldset>
			    <legend>SIGN IN</legend>
			    <?php if ($msg = $this->session->flashdata('response')): ?>
					<div class="alert alert-dismissible alert-danger response">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<?php echo $msg; ?>
					</div>
				<?php endif; ?>
			    <div class="form-group w-75">
				  <?php echo form_input(['name'=>'email', 'placeholder'=>'Email', 'class'=>'form-control']); ?>
				  <?php echo form_error('email', '<div class="text-light bg-danger">','</div>'); ?>
			    </div>
			    <div class="form-group w-75">
				  <?php echo form_password(['name'=>'password', 'placeholder'=>'Password', 'class'=>'form-control']); ?>
				  <?php echo form_error('password', '<div class="text-light bg-danger">','</div>'); ?>
			    </div>
				  <?php echo form_submit(['name'=>'submit', 'value'=>'SIGN IN', 'class'=>'btn btn-success mr-lg-2']); ?>
				  <?php echo form_reset(['name'=>'reset', 'value'=>'RESET', 'class'=>'btn btn-secondary']); ?>
			  </fieldset>
			<?php echo form_close(); ?>
		</div>

		<div class="col">
			<?php echo form_open('welcome/signup');?>
			  <fieldset>
			    <legend>REGISTER</legend>
			    <?php if ($msg = $this->session->flashdata('response2')): ?>
					<div class="alert alert-dismissible alert-danger response">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<?php echo $msg; ?>
					</div>
				<?php endif; ?>

			    <?php
			    	$data = array('roleID' => '2');
			    ?>
			    <?php echo form_hidden($data); ?>

			    <div class="form-group w-75">
				  <?php echo form_input(['name'=>'username', 'placeholder'=>'User Name', 'class'=>'form-control']); ?>
				  <?php echo form_error('username', '<div class="text-light bg-danger">','</div>'); ?>
			    </div>
			    <div class="form-group w-75">
				  <?php echo form_input(['name'=>'email', 'placeholder'=>'Email', 'class'=>'form-control']); ?>
				  <?php echo form_error('email', '<div class="text-light bg-danger">','</div>'); ?>
			    </div>
			    <div class="form-group w-75">
				  <?php echo form_password(['name'=>'password', 'placeholder'=>'Password', 'class'=>'form-control']); ?>
				  <?php echo form_error('password', '<div class="text-light bg-danger">','</div>'); ?>
			    </div>
			    <div class="form-group w-75">
				  <?php echo form_input(['name'=>'mobile', 'placeholder'=>'Mobile', 'class'=>'form-control']); ?>
				  <?php echo form_error('mobile', '<div class="text-light bg-danger">','</div>'); ?>
			    </div>
				  <?php echo form_submit(['name'=>'submit', 'value'=>'SIGN UP', 'class'=>'btn btn-primary mr-lg-2']); ?>
				  <?php echo form_reset(['name'=>'reset', 'value'=>'RESET', 'class'=>'btn btn-secondary']); ?>
			  </fieldset>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>

<footer style="position: fixed;">
	<nav class="navbar navbar-expand-lg p-3">
		<h6 style="color: #fff;margin-left:40%;">copyright&copy; 2020 All rights reserved.</h6>
	</nav>
</footer>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.js'); ?>" />

<!-- -----------------bootswatch.com/lux/------------------------- -->
	<script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>

<!-- -----------------getbootstrap.com/CDN------------------------- -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

</body>
</html>
