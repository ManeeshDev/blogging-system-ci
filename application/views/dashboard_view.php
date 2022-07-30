<!--
	@author maneesh
 -->
<?php include_once('headerAdmin.php'); ?>

<br>
	<div class="container">
		<nav class="nav d-flex flex-row-reverse">
			<?php echo anchor('dashboard/addPost', 'ADD BLOG POST', 'class="btn btn-info w-25 "'); ?>
			<div style="margin-right:520px;" >
			<?php $username = $this->session->userdata('username') ?>
			<h3 class="text-light" >Welcome <?php echo $username; ?></h3>
			</div>
		</nav>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php if ($msg = $this->session->flashdata('response')): ?>
					<br>
					<div class="alert alert-dismissible alert-danger response">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<?php echo $msg; ?>
					</div>
				<?php endif; ?>

				<h2 class="text-light mb-2">READ OUR BLOGS</h2>
				<div class="container-fluid">
				<?php if (count($records)): ?>
					<?php foreach($records as $record): ?>
					<div class="row bg-light p-3 ">
						<div class="col-lg-3 align-self-center bg-dark p-0">
							<img style="max-width:270px; padding:0;margin:0;" src=<?php echo $record->Image; ?> >
						</div>
						<div class="col-lg-1"></div>
						<div class="col-lg-8">
							<h5 class="title text-primary"><?php echo $record->Title; ?></h5>
							<hr class="bg-dark">
							<p class="description text-primary" style="height:40px;overflow:hidden;">
								<?php echo $record->Description; ?>
							</p><span style="float:right;">.....<?php echo anchor('dashboard/post/'.$record->Id, 'Read more', 'class="text-dark"'); ?> </span>

							<ol class="breadcrumb">
							  <li class="mr-lg-3">
							   <?php echo anchor('dashboard/post/'.$record->Id, 'VIEW', 'class="badge badge-info p-2"'); ?>
							  </li>
							  <li class="mr-lg-3">
							   <?php echo anchor('dashboard/editPost/'.$record->Id, 'EDIT', 'class="badge badge-success p-2"'); ?>
							  </li>
							  <li class="mr-lg-3">
							   <?php echo anchor('dashboard/deletePost/'.$record->Id, 'DELETE', 'class="badge badge-danger p-2"'); ?>
							  </li>
							 </ol>
						</div>
					</div>
					<hr>
					<?php endforeach; ?>
				<?php else: ?>
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
