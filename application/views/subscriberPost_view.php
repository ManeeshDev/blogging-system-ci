<!--
	@author maneesh
 -->
<?php include_once('header.php'); ?>

<br>
	<div class="container">
		<?php $userid = $this->session->userdata('userid') ?>

		<nav class="nav d-flex flex-row-reverse">
			<?php $username = $this->session->userdata('username') ?>
			<h3 class="text-light" >Welcome <?php echo $username; ?></h3>
			<div style="margin-right:650px;" >
			<h5 class="text-light">SUBSCRIBER</h5>
			</div>
		</nav>
		<nav class="nav d-flex flex-row-reverse">
			<?php echo anchor('dashboard/', 'ALL BLOG POSTS', 'class="btn btn-info w-25 "'); ?>
		</nav>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="text-light mb-2">READ BLOG POST</h2>
				<?php if ($posts): ?>
				<div class="container-fluid bg-light border-0">
					<div class="row p-3 ">
						<div class="col-lg-3 align-self-center bg-dark p-0">
							<img style="max-width:350px; padding:0;margin:0;" src=<?php echo $posts->Image; ?> >
						</div>
						<div class="col-lg-1"></div>
						<div class="col-lg-8">
							<br><br><br>
							<hr class="bg-dark">
							<h2 class="title text-primary" style="text-align:center;"><?php echo $posts->Title; ?></h2>
							<hr class="bg-dark">
						</div>
					</div>
					<div class="row p-3 ">
						<p class="description text-primary"><?php echo $posts->Description; ?></p>
					</div>

				<?php elseif (!$posts): ?>
					<div class="card text-white bg-danger mb-3" style="max-width: 80rem; height:25.2rem;">
					  <div class="card-header">Not Found..!</div>
					  <div class="card-body"><br><br>
					  	<center>
					    <h4 class="card-title">There is no Blog Posts....!</h4> <br><br>
					    <h5><?php echo anchor('dashboard/addPost', 'ADD BLOG POST', 'class="btn btn-primary"'); ?></h5>
					    </center>
					  </div>
					</div>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

<br>
<?php include_once('footer.php'); ?>
