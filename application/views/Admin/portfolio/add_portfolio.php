<div class="form-horizontal">
	<!-- <form class="form-horizontal" method="POST" action="<?php echo base_url()."portfolio/add"; ?>"> -->
	<?php echo form_open_multipart('portfolio/add'); ?>
	  <div class="form-group">
	    <label for="inputName" class="col-sm-2 control-label">Title :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="title" placeholder="Yohanes">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputSkill" class="col-sm-2 control-label">Bidang :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="bidang" placeholder="Web Developer">
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="inputwebsite" class="col-sm-2 control-label">Detail :</label>
	    <div class="col-sm-10">
	      <textarea class="form-control" name="detail" rows="3"></textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputSkill" class="col-sm-2 control-label">Date :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="date" placeholder="2012-12-12">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputSkill" class="col-sm-2 control-label">Client :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="client" placeholder="Web Developer">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputimgprofile" class="col-sm-2 control-label">Image :</label>
	    <div class="col-sm-10">
	      <input type="file" name="userfile" placeholder="Image Profile">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	    	<input type="submit" name="btnAddPortfolio" value="Add Portfolio">
	    	<?php //echo form_submit('submit', 'Add'); ?>
	      <!-- <button type="submit" class="btn btn-default">Save</button> -->
	    </div>
	  </div>
	<?php //echo form_close(); ?>
	</form>
</div>
	