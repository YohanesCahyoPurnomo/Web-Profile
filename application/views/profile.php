<div class="contentwrap">
	<h1 style="font-size:85px">Profile</h1>
	<hr>
	<div class="col-md-12">
		<img class="img_profile" src="<?php echo base_url('asset/image/me_profile.png'); ?>">

		<div class="col-md-5 prag_profile">
			<p>Graduate of Informatics Technology in Duta Wacana Christian University. 
				Interested in Web Programming and GUI programming. Excellent expertise 
				in PHP, HTML, CSS, JQuery JavaScript and VB.NET. Adaptable and communicative 
				professional with excellent ability to work in individual or teams. 
			</p>

		</div>
		<div class="col-md-3" style="float:right">
			<h3>AVAILABLE FOR : </h3>
			<hr>
			<H4>Website</H4>
			<h5>cahyoycp.com</h5>
			<hr>
			<h4>Mobile Number</h4>
			<h5>0858-3278-8002</h5>
			<hr>
			<h4>Email Address</h4>
			<h5>cahyo_ycp@gmail.com</h5>
		</div>
		
	</div>

	<div class="garis"></div>


	<div class="col-md-6">
		<h3>Education</h3>
		<hr>
		<h4>Universitas Kristen Duta Wacana Yogyakarta</h4>
		<p>S1 Informatics Technology. Duta Wacana Christian University of Yogyakarta,
		 2012-now. Coursework in informatics fundamental, Database Management, 
		 Research in Informatics, Web Programming.</p>
		<h4>SMA Pangudi Luhur Sukaraja</h4>

		<h3>My Skill Set</h3>
		<hr>
		<img src="<?php echo base_url('asset/image/grafik-skill.png'); ?>">

		<?php echo form_open_multipart('upload/upload');?>

		<input type="file" name="userfile" size="20" />

		<br /><br />

		<input type="submit" name="upload" value="upload" />

		</form>

		
	</div>
	<div class="col-md-6">
		<h3>Experience</h3>
		<hr>
	</div>
	<div class="col-md-12">
		<h3>Portfolio</h3>
		<hr>
	</div>
</div>