<div>
	<h1>About Setting</h1>
	<div>
		<a href="<?php echo base_url(); ?>admin/about/add">Add About</a>
		<table class="table table-striped">
		  <tr style="background:#D4D4D4;">
		  	<td>No</td>
		  	<td>Judul</td>
		  	<td>Keterangan</td>
		  	<td>Tahun</td>
		  	<td>Image</td>
		  	<td>Action</td>
		  </tr>
		  <?php 
		  	$nomer = 1;
		  	foreach ($data as $dataAbout) { ?>
		  		<tr>
				  	<td><?php echo $nomer; ?></td>
				  	<td><?php echo $dataAbout['judul']; ?></td>
				  	<td><?php echo $dataAbout['keterangan']; ?></td>
				  	<td><?php echo $dataAbout['tahun']; ?></td>
				  	<td><?php echo $dataAbout['image']; ?></td>
				  	<td><a href="<?php echo base_url().'admin/about/update/'.$dataAbout['id']; ?>">Update</a> | 
				  		<a href="<?php echo base_url() . 'about/deleteAbout/' . $dataAbout['id']; ?>">Delete</a></td>
				</tr>
		  <?php 
		  	$nomer += 1;
		  } ?>
		</table>
	</div>
</div>