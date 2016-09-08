<div>
	<h1>Portfolio Setting</h1>
	<div>
		<a href="<?php echo base_url(); ?>admin/portfolio/add">Add Portfolio</a>
		<table class="table table-striped">
		  <tr style="background:#D4D4D4;">
		  	<td>No</td>
		  	<td>Judul</td>
		  	<td>Category</td>
		  	<td>Date</td>
		  	<td>Client</td>
		  	<td class="col-sm-3">detail</td>
		  	<td>Image</td>
		  	<td>Action</td>
		  </tr>
		  <?php $nomor = 1; ?>
		  <?php foreach ($data as $dataPortfolio) { ?>
		  <tr>
		  	<td><?php echo $nomor; ?></td>
		  	<td><?php echo $dataPortfolio['title']; ?></td>
		  	<td><?php echo $dataPortfolio['category']; ?></td>
		  	<td><?php echo $dataPortfolio['date']; ?></td>
		  	<td><?php echo $dataPortfolio['client']; ?></td>
		  	<td class="col-sm-4"><?php echo $dataPortfolio['detail']; ?></td>
		  	<td><?php echo $dataPortfolio['image'] ?></td>
		  	<td><a href="<?php echo base_url(). "admin/portfolio/update/".$dataPortfolio['id']; ?>">Update</a> | 
		  		<a href="<?php echo base_url()."portfolio/delete/".$dataPortfolio['id']; ?>">Delete</a></td>
		  </tr>
		  <?php
		  	$nomor += 1;
		   } ?>
		</table>
	</div>
</div>