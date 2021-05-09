	<?php
	$admins=$admin->getAllAdmins();
	if(isset($_POST["login"])){
		$admin->addAdmin($_POST);

	}

	if(isset($_GET["action"])&&$_GET["action"]=="delete"){
		$id=$_GET["id"];
		$respnse=$admin->deleteAdmin($id);

	}
	?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Admins
			</h2>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					
					<div class="panel-body">
					<button class="btn-lg btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Add admin</button>
						<table data-toggle="table"    data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr> <th data-field="Name" data-sortable="true">Name</th>
						  						        <th data-field="Username" data-sortable="true">Username</th>

						  						       
						       
						     
						        <th></th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($admins as $ad){ ?>
						    <tr>
						    <td><?php echo $ad->name; ?></td>
						    <td> <?php echo $ad->login; ?></td>
						    
						    <td><a href="index.php?page=admins&action=delete&id=<?php echo $ad->id; ?>"><button class="btn btn-danger" >Delete</button></a></td>
						    </tr> 
						    <?php } ?> 
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	


<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">

    <div class="modal-content">
      <form method="post">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<h2 class="modal-title">Add admin</h2> 
  </div>
     <div class="modal-body">
     
       <div class="form-group">
       	<label>Name</label>
       	<input type="text" class="form-control" name="name" required="required">

       </div>
         <div class="form-group">
       	<label>Username</label>
       	<input type="text" class="form-control" name="login" required="required">

       </div>
            <div class="form-group">
       	<label>Password</label>
       	<input type="password" class="form-control" name="password" required="required">

       </div>
   
  
      
      
      </div>
      <div class="modal-footer">
        
        <input  type="submit" class="btn btn-primary" value="Add">
      </div>
       </form>
     
    </div>
  </div>
</div>
		
		
	</div><!--/.main-->