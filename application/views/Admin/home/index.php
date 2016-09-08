<div>
	<h1>Home Profile Setting</h1>
	<div>
		<a href="<?php echo base_url(); ?>admin/home/form">Add Profile</a>
		<table class="table table-striped">
		  <tr style="background:#D4D4D4;">
		  	<td>No</td>
		  	<td>First Name</td>
		  	<td>Last Name</td>
		  	<td>Birthday</td>
		  	<td>Country</td>
		  	<td>Skill</td>
		  	<td>Email</td>
		  	<td>Mobile Number</td>
		  </tr>
		  <?php 
		  	$nomer = 1;
		  	foreach ($data as $dataHome) { ?>
		  		<tr>
				  	<td><?php echo $nomer; ?></td>
				  	<td><?php echo $dataHome['firstname']; ?></td>
				  	<td><?php echo $dataHome['lastname']; ?></td>
				  	<td><?php echo $dataHome['birthday']; ?></td>
				  	<td><?php echo $dataHome['profile_image']; ?></td>
				  	<td><a href="<?php echo base_url().'admin/about/update/'.$dataHome['id']; ?>">Update</a> | 
				  		<a href="<?php echo base_url() . 'about/deleteAbout/' . $dataHome['id']; ?>">Delete</a></td>
				</tr>
		  <?php 
		  	$nomer += 1;
		  } ?>
		</table>
	</div>
</div>