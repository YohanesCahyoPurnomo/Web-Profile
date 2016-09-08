<div class="form-horizontal">
	<!-- <form class="form-horizontal" method="POST" action="<?php echo base_url()."portfolio/add"; ?>"> -->
	<?php echo form_open_multipart('admin/home/add'); ?>
	  <div class="form-group">
	    <label for="inputName" class="col-sm-2 control-label">Firtsname :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="lastname" placeholder="Yohanes">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputSkill" class="col-sm-2 control-label">Lastname :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="firstname" placeholder="Cahyo Purnomo">
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="inputwebsite" class="col-sm-2 control-label">Skill :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="skill">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputSkill" class="col-sm-2 control-label">Birthday :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="birthday" placeholder="2012-12-12">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputSkill" class="col-sm-2 control-label">Website :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="website" placeholder="Web Developer">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputimgprofile" class="col-sm-2 control-label">Mobile Number :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="mobile_number" placeholder="Image Profile">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputimgprofile" class="col-sm-2 control-label">Email :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="email" placeholder="Image Profile">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputimgprofile" class="col-sm-2 control-label">Profile Image :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="profile_image" placeholder="Image Profile">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputimgprofile" class="col-sm-2 control-label">Country :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="country" placeholder="Image Profile">
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="inputwebsite" class="col-sm-2 control-label">Summary :</label>
	    <div class="col-sm-10">
	      <textarea class="form-control" name="summary" rows="3"></textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	    	<input type="submit" name="btnAddHome" value="Add Home">
	    	<?php //echo form_submit('submit', 'Add'); ?>
	      <!-- <button type="submit" class="btn btn-default">Save</button> -->
	    </div>
	  </div>
	<?php //echo form_close(); ?>
	</form>
</div>
	