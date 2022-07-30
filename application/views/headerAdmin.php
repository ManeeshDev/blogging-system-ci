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
			background-image: url("<?php echo base_url('assets/image/bg.png');?>") !important;
			/*background-image: url("<?php //echo base_url();?>assets/image/bg-1.png") !important;
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

	<nav class="navbar navbar-expand-lg navbar-dark p-2" style="background-color:rgba(0, 0, 0, 0.8);">
	  <?php echo anchor('dashboard/', 'BLOGGING SYSTEM', 'class="navbar-brand ml-lg-3" style="font-size:25px;"'); ?>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarColor02">
	    <ul class="navbar-nav ml-lg-2">
	      <li class="nav-item">
		      <div class="btn-group" role="group">
		        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle py-1 px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</button>
		        <div class="dropdown-menu bg-danger" aria-labelledby="btnGroupDrop1" style="">
		          <!-- <a class="dropdown-item" href="#">Logout</a> -->
		          <?php echo anchor('Welcome/logout', 'Logout', 'class="dropdown-item" '); ?>
		        </div>
		      </div>
	      </li>
	    </ul>

	    <form class="form-inline h-25">
	      <input class="form-control mr-sm-2 py-1 px-3 h-25" type="text" placeholder="Search">
	      <button class="btn btn-secondary my-2 my-sm-0 py-1 px-3 h-25" type="submit">Search</button>
	    </form>

	  </div>
	</nav>
