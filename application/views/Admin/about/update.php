<div >
	<!-- <form class="form-horizontal"> -->
	<?php foreach ($data as $dataUpdate) {
		echo form_open_multipart('about/updateAbout/'.$dataUpdate['id']); 
	 ?>
	  <div class="form-group">
	    <label for="inputName" class="col-sm-2 control-label">Judul :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="judul" value="<?php echo $dataUpdate['judul']; ?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputSkill" class="col-sm-2 control-label">Keterangan :</label>
	    <div class="col-sm-10">
	      <textarea class="form-control" name="keterangan" rows="3"><?php echo $dataUpdate['keterangan']; ?></textarea>
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="inputwebsite" class="col-sm-2 control-label">Tahun :</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="tahun" value="<?php echo $dataUpdate['tahun']; ?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputimgprofile" class="col-sm-2 control-label">Image :</label>
	    <div class="col-sm-10">
	      <input type="file" name="userfile" value="<?php echo $dataUpdate['image']; ?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	    	<?php echo form_submit('submit', 'Add About'); ?>
	      <!-- <button type="submit" class="btn btn-default">Save</button> -->
	    </div>
	  </div>
	<?php echo form_close(); ?>
	<?php } ?>
	<!-- </form> -->
</div>
	