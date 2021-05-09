
	<?php

		$foods=$admin->getAllFoods();

	
	if(isset($_POST["name"])){
		$image_name=$_FILES["image"]["name"];
		$image=$_FILES["image"]["tmp_name"];
		$image_name=time().$image_name;
		move_uploaded_file($image, "../foods/".strtolower($image_name));
		$_POST["image"]=strtolower($image_name);
		
		$admin->addFood($_POST);

	}
	if(isset($_GET["action"])&&$_GET["action"]=="delete"){
		$id=$_GET["id"];

		
	$admin->deleteFood($id);

	}
	?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Food</h2>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					
					<div class="panel-body">
					<button class="btn-lg btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Add food</button>
						<table data-toggle="table"    data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="Име" data-sort-order="desc">
						    <thead>
						    <tr>
						  						        <th data-field="Name" data-sortable="true">Name</th>
						        
						        <th data-field="Photo" data-sortable="true">Photo</th>
						        <th data-field="Description"  data-sortable="true">
								Description</th>
						             <th data-field="Price"  data-sortable="true">Price</th>
						        <th></th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($foods as $food){ ?>
						    <tr>
						    <td> <?php echo $food->name; ?></td>
						        <td><img src="../foods/<?php echo $food->image; ?>"width="50" height="50"/> </td>
						    <td>
						    <div  onmouseleave="hide(<?php echo $food->id ; ?>)" style="word-break: break-all; display:none;"id="<?php echo $food->id; ?>">
						    
						    </div> <span <?php echo $food->id ; ?> > <?php echo $food->description ?></span>
						    </td>

						<td><?= $food->price ?> BDT </td>
						   
						    <td>

						    	
						    	
						    	<a href="index.php?page=foods&action=delete&id=<?php echo $food->id; ?>"><button class="btn btn-danger" >Delete</button></a>
						    	</td>
						    </tr>
						    <?php } ?>  
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>





<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">

    <div class="modal-content">
        <form method="post" enctype="multipart/form-data">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<h2 class="modal-title">Add food</h2> 
  </div>
     <div class="modal-body">
   
       <div class="form-group">
       	<label>Name</label>
       	<input type="text" class="form-control" name="name" required="required">

       </div>
       <div class="form-group">
       	<label> Description</label>
       	<textarea class="form-control" name="description"></textarea>
       </div>
       <div class="form-group">
       	<label>Photo</label>
       	<input type="file" name="image" class="form-control" required="required">

       </div>
             <div class="form-group">
       	<label>Price</label>
       	<input type="text" name="price" class="form-control" required="required">

       </div>
       <div class="form-group">
       	<label>
       	Menu</label>
       	<select name="categorie_id" class="form-control" required="required">

       	<option value="">Select a menu</option>
       	<?php foreach($admin->getAllMenus() as $menu) { ?>

       	<option value="<?php echo $menu->id; ?>"><?php echo $menu->name; ?></option>
       	<?php } ?>

       	</select>
       </div>
      
      </div>
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary" value="Add">
      </div>
      </form>
     
    </div>
  </div>
</div>
		
		
	</div><!--/.main-->
	<script>
function show(id){
	var dir=document.getElementById(id);
	dir.style.display="block";



}
function hide(id){
	var dir=document.getElementById(id);
	dir.style.display="none";

}
	</script>

