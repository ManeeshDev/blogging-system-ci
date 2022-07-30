<!--
	@author maneesh
 -->
<?php include_once('headerAdmin.php'); ?>

<br>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<?php $username = $this->session->userdata('username') ?>
				<h3 class="text-light">Welcome <?php echo $username; ?></h3>
				<br>
				  <?php echo anchor('dashboard/', 'VIEW POSTS', 'class="btn btn-primary w-75"'); ?>

				<div class="vl"></div>
			</div>
			<div class="col-lg-8">
				<h2 class="text-light">ADD NEW BLOG POST</h2>
				<div class="row">
					<div class="col">
						<?php echo form_open_multipart('dashboard/publishPost', ['class'=>'form-horizontal']);?>
						  <fieldset>
						    <div class="form-group ">
						      <label for="">Title</label>
							  <?php echo form_input(['name'=>'title', 'placeholder'=>'Title', 'value'=>
							  set_value('title'), 'class'=>'form-control']); ?>
							  <?php echo form_error('title', '<div class="text-light bg-danger">','</div>'); ?>
						    </div>
						    <div class="form-group ">
							  <label for="">Description</label>
							  <?php echo form_textarea(['name'=>'description', 'placeholder'=>'Description', 'value'=>
							  set_value('description'), 'class'=>'form-control']); ?>
							  <?php echo form_error('description', '<div class="text-light bg-danger">','</div>'); ?>
						    </div>
						    <div class="form-group custom-file ">
							  <label class="custom-file-label" for="customFile">Choose image file</label>
							  <?php echo form_upload(['name'=>'image', 'value'=>'Save', 'class'=>'custom-file-input', 'id'=>'customFile']); ?>
							  <?php echo form_error('image', '<div class="text-light bg-danger">','</div>'); ?>

						      <!-- <?php //echo form_upload(['name'=>'image', 'value'=>'Save', 'class'=>'btn btn-info']); ?>
							  <?php //echo form_error('image', '<div class="text-light bg-danger">','</div>'); ?> -->
							</div>
						    <br><br>
						    <div class="form-group ">
							  <?php echo form_submit(['name'=>'submit', 'value'=>'PUBLISH POST', 'class'=>'btn btn-info mr-2']); ?>
							  <?php echo form_reset(['name'=>'reset', 'value'=>'RESET', 'class'=>'btn btn-secondary']); ?>
							</div>
						  </fieldset>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<br>
<?php include_once('footer.php'); ?>
