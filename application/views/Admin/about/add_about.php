<div class="form-horizontal">
	<!-- <form class="form-horizontal"> -->
	<?php echo form_open_multipart('about/addAbout'); ?>
	  <div class="form-group">
	    <label for="inputName" class="col-sm-2 control-label">Judul :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="judul" placeholder="Yohanes">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputSkill" class="col-sm-2 control-label">Keterangan :</label>
	    <div class="col-sm-10">
	      <textarea class="form-control" name="keterangan" rows="3"></textarea>
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="inputwebsite" class="col-sm-2 control-label">Tahun :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="tahun" placeholder="Web Developer">
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
	    	<?php echo form_submit('submit', 'Add About'); ?>
	      <!-- <button type="submit" class="btn btn-default">Save</button> -->
	    </div>
	  </div>
	<?php echo form_close(); ?>
	<!-- </form> -->
</div>
	