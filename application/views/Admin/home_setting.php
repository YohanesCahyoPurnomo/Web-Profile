<div class="contentwrap">

	<!-- facebook -->
	<!-- <h1>Facebook</h1>
	<?php if(@$user_profile): ?>
		<pre>
			<?php echo print_r($user_profile, TRUE) ?>
		</pre>
		<a href="<?= $logout_url ?>">Logout</a>
	<?php else: ?>
		<h2>Welcome, please login below</h2>
		<a href="<?= $login_url ?>">Login</a>
	<?php endif; ?> -->
	<!-- end facebook -->
	
	<!-- <div class="col-md-12"> -->
		<form class="form-horizontal">
		  <div class="form-group">
		    <label for="inputName" class="col-sm-2 control-label">Name :</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="inputname" placeholder="Yohanes">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputSkill" class="col-sm-2 control-label">Title Skill :</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="inputskill" placeholder="Web Developer">
		    </div>
		  </div>
		   <div class="form-group">
		    <label for="inputwebsite" class="col-sm-2 control-label">Website url :</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="inputwebsite" placeholder="ycp.com">
		    </div>
		  </div>
		    <div class="form-group">
		    <label for="inputnotlp" class="col-sm-2 control-label">Mobile Number :</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="inputmobilenumber" placeholder="085832788002">
		    </div>
		  </div>
		    <div class="form-group">
		    <label for="inputEmail" class="col-sm-2 control-label">Email :</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="inputemail" placeholder="cahyo.ycp@gmail.com">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputimgprofile" class="col-sm-2 control-label">Img Profile :</label>
		    <div class="col-sm-10">
		      <input type="file" id="inputimgprofile" placeholder="Image Profile">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Save</button>
		    </div>
		  </div>
		</form>
		
	<!-- </div> -->
	
</div>