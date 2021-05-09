	<?php
	$orders=$admin->getAllOrders();
	if(isset($_GET["action"])&&$_GET["action"]=="delete"){
		$id=$_GET["id"];
		$admin->deleteOrder($id);

	}
		if(isset($_GET["action"])&&$_GET["action"]=="deliver"){
		$id=$_GET["id"];
		$admin->deliverOrder($id);

	}
	?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Orders
			</h2>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					
					<div class="panel-body">
				
						<table data-toggle="table"    data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr> 
						   <th data-field="Date and time" data-sortable="true">Date and time</th>

						    <th data-field="Name" data-sortable="true">Name</th>
						     <th data-field="Telephone" data-sortable="true">Telephone</th>
						  <th data-field="Address" data-sortable="true">Address</th>
						  <th data-field="Price" data-sortable="true">Price</th>




						  						        <th data-field="Status" data-sortable="true">Status</th>

						  						       
						       
						     
						        <th></th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($orders as $ad){ ?>
						    <tr>
						      <td> <?php echo $ad->datetime; ?></td>
						    <td><?php echo htmlentities($ad->name); ?></td>
						      <td> <?php echo htmlentities($ad->phone); ?></td>
						        <td> <?php echo htmlentities($ad->adress); ?></td>

						    <td> <?php echo $ad->price; ?></td>
						    <td> <?php if($ad->status==0){

						    	echo "<label class='label label-warning'>Изчакване</label>";
						    } elseif($ad->status==1){
						   echo "<label class='label label-success'>Доставено</label>";


						    }?></td>
						    
						    <td>
			<button class="btn btn-primary" onclick="showModal(this)"> Details</button>
				<div id="fff" style="display:none">
			
				
				
		
			<?php foreach($ad->ordered_food as $d) { ?>
				<ul style=" list-style-type:none;">
				
				
			
				<li style="display:list-item; margin:5px;  "><?= $d->name ?></li>
				<li style="display:list-item; margin:5px;"><img width="50" height="50" src="../foods/<?= $d->image ?>" </li>
				<li style="display:list-item; margin:5px;  "><?= $d->price ?> BDT</li>
				<li style="display:list-item; margin:5px;  "><?= $d->quantity ?> count</li>
				</ul>
				<hr>

				<?php } ?>
			

			</div>

						    <?php if($ad->status==0){ ?>
						    <a href="index.php?page=orders&action=deliver&id=<?php echo $ad->id; ?>"><button class="btn btn-success" >Delivered</button></a>
						    <?php } ?>
						 

						    <a href="index.php?page=orders&action=delete&id=<?php echo $ad->id; ?>"><button class="btn btn-danger" onclick="return confirm ('Are you sure?,
							 that you want to delete this order?');" >Delete</button></a></td>

						    </tr> 
						    <?php } ?> 
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	



		
		
	</div><!--/.main-->

	

	  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  id="mod" >
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				 <h4 class="modal-title" id="myModalLabel">Order details </h4>
							      </div>
							      <div class="modal-body">
								  <div id="don" style="margin-left:-10px;">


							        
							      </div>
							   
							    </div>
							  </div>
							

							  <script>
							  function showModal(e){
							 var data= e.nextElementSibling;
							
							 $("#don").html(data.innerHTML);

							
							  	$("#mod").modal('show');

							  }
							  </script>
							
	          
