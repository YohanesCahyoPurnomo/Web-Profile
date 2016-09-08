<div>
	<h1>Update Portfolio</h1>

	<div class="form-horizontal">
		<!-- <form class="form-horizontal" method="POST" action="<?php echo base_url()."portfolio/add"; ?>"> -->
		
		<?php foreach ($data as $dataUpdate) { ?>
		<?php echo form_open_multipart('portfolio/update/'.$dataUpdate['id']); ?>
		 <div class="form-group">
		    <label for="inputName" class="col-sm-2 control-label">Title :</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="title" value="<?php echo $dataUpdate['title']; ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputSkill" class="col-sm-2 control-label">Category :</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="category" value="<?php echo $dataUpdate['category']; ?>">
		    </div>
		  </div>
		   <div class="form-group">
		    <label for="inputwebsite" class="col-sm-2 control-label">Detail :</label>
		    <div class="col-sm-10">
		      <textarea class="form-control" name="detail" rows="3"><?php echo $dataUpdate['detail']; ?></textarea>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputSkill" class="col-sm-2 control-label">Date :</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="date" value="<?php echo $dataUpdate['date']; ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputSkill" class="col-sm-2 control-label">Client :</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="client" value="<?php echo $dataUpdate['client']; ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputimgprofile" class="col-sm-2 control-label">Image :</label>
		    <div class="col-sm-10">
		      <input type="file" name="userfile" value="Image Profile">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		    	<input type="submit" name="btnAddPortfolio" value="Save Portfolio">
		    	<?php //echo form_submit('submit', 'Add'); ?>
		      <!-- <button type="submit" class="btn btn-default">Save</button> -->
		    </div>
		  </div>
		<?php } ?>
		  
		<?php //echo form_close(); ?>
		</form>
	</div>
		
</div>