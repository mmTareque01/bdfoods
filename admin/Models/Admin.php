<?php
class Admin{
	private $db;

	public function __construct(){
				try{
	$this->db=new PDO("mysql:host=localhost;dbname=food_store","root","");
		







	
	$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e){
		die($e->getMessage());
	}
	}











	public function login($data){
		$data["login"]=(isset($data["login"]))?$data["login"]:"";
		$data["password"]=(isset($data["password"]))?$data["password"]:"";


		foreach($data as $d){
			if(empty($d)){
				$error="<p style='color:red'> Wrong name or password</p>";
				return $error;
			}

		}
		$login=htmlentities($data["login"]);
		$password=htmlentities($data["password"]);

		$query=$this->db->query("select * from admins where login='".$login."'");
		if(!$query->rowCount()){
			$error="<p style='color:red'>Wrong name or password</p>";
				return $error;

		}

		$guest=$query->fetch(PDO::FETCH_OBJ);
		if(!password_verify($password,$guest->password)){
				$error="<p style='color:red'>Wrong name or password<</p>";
				return $error;

		}
		
		$_SESSION["id"]=$guest->id;
		$_SESSION["login"]=$guest->login;
		$_SESSION["password"]=$guest->password;
		echo"<script>location.href='index.php'; </script>";


	}
	public function getAllAdmins(){
		$query=$this->db->query("select * from admins");
		$admins=$query->fetchAll(PDO::FETCH_OBJ);
		return $admins;
	}
	public function addAdmin($data){
		if($this->db->query("insert into admins (name,login,password)values('".$data['name']."','".$data['login']."','".password_hash($data['password'],PASSWORD_BCRYPT)."')")){
echo"<script>window.location.href='index.php?page=admins';
alert('Successfully added admin');</script>";
		

		}
		else{
			echo"<script>alert('Please try it later')</script";
		}


	}
	public function deleteAdmin($id){
		if($this->db->query("delete from admins where id='".$id."'")){
echo"<script>window.location.href='index.php?page=admins';
alert('Please try it later');</script>";
		

		}
		else{
			echo"<script>alert('Please try it later')</script";

		}
	}


	public function getAllFoods(){
		$query=$this->db->query("select * from foods order by id desc");
		$foods=$query->fetchAll(PDO::FETCH_OBJ);
		return $foods;
	}


	public function deleteFood($id){
		$row=$this->db->query("select * from foods where id='".$id."'");
		$row=$row->fetch(PDO::FETCH_OBJ);

		$image=($row->image!="")?$row->image:null;
			if($this->db->query("delete from foods where id='".$id."'")){
				
				@unlink("../foods/".$image);
			

				

				echo"<script>window.location.href='index.php?page=foods';
				alert('Successfully delete food');</script>";
			}
				
			
			else{
						echo"<script>window.location.href='index.php?page=foods';
						alert('Please try it later');</script>";
						

			}
			

		
	
	
	
		 }

	public function addFood($data){
		if($this->db->query("insert into foods(name,image,description,price,category_id) values('".$data['name']."','".$data['image']."','".$data['description']."','".$data['price']."','".$data['categorie_id']."')")){
		
				

				echo"<script>window.location.href='index.php?page=foods';
				alert('Successful food addition');</script>";
				
			}
			else{
						echo"<script>window.location.href='index.php?page=foods';
						alert('Please try it later');</script>";
						

			}


	
}



	public function getAllMenus(){
		$query=$this->db->query("select * from categories order by id desc");
		$menus=$query->fetchAll(PDO::FETCH_OBJ);
		return $menus;
	}


	public function deleteMenu($id){
		$row=$this->db->query("select * from categories where id='".$id."'");
		$row=$row->fetch(PDO::FETCH_OBJ);

		$image=($row->image!="")?$row->image:null;
			if($this->db->query("delete from categories where id='".$id."'")){
				
				@unlink("../menus/".$image);
			

				

				echo"<script>window.location.href='index.php?page=menus';
				alert('Successfully delete a menu');</script>";
			}
				
			
			else{
						echo"<script>window.location.href='index.php?page=menus';
						alert('Please try it later');</script>";
						

			}
			

		
	
	
	
		 }

	public function addMenu($data){
		if($this->db->query("insert into categories(name,image,description) values('".$data['name']."','".$data['image']."','".$data['description']."')")){
		
				

				echo"<script>window.location.href='index.php?page=menus';
				alert('Successfully add a menu');</script>";
				
			}
			else{
						echo"<script>window.location.href='index.php?page=menus';
						alert('Please try it later');</script>";
						

			}


	
}


public function getAllOrders(){
	$q=$this->db->query("select * from orders ");
	$orders=$q->fetchAll(PDO::FETCH_OBJ);


		
		foreach ($orders as $o) {
		
			$query=$this->db->query("select orders_foods.*,foods.name,foods.image from orders_foods inner join foods on orders_foods.food_id=foods.id  where orders_foods.order_id='".$o->id."' ");
	

		$o->ordered_food=$query->fetchAll(PDO::FETCH_OBJ);
	}
	
	
		return $orders;

}

public function deleteOrder($id){
	$q=$this->db->prepare("delete from orders where id=:id");
	if($q->execute([":id"=>$id])){
		echo"<script>window.location.href='index.php?page=orders';
						alert('Successfully delete an order');</script>";

	}
	else{
		echo"<script>window.location.href='index.php?page=orders';
						alert('Please try it later');</script>";
	}

}
public function deliverOrder($id){
	$q=$this->db->prepare("update orders set status=1 where id=?");
	
	if($q->execute([$id])){

echo"<script>window.location.href='index.php?page=orders';
						alert('The order is marked as delivered');</script>";

	}
	else{
		echo"<script>window.location.href='index.php?page=orders';
						alert('Please try it later');</script>";
	}

}





public function getAllReservations(){
	$q=$this->db->query("SELECT * FROM `reservations`");
	$reservations=$q->fetchAll(PDO::FETCH_OBJ);
	return $reservations;

	
	

}
public function reserveTable($id){
	if($this->db->query("update reservations set status=1 where id='".$id."'")) {
		echo"<script>window.location.replace('index.php?page=reservations'); alert('The table is reserved');</script>";
	} else{
		echo"<script>window.location.replace('index.php?page=reservations'); alert('Please try it later');</script>";

	}
}
public function deleteReservation($id){
	if($this->db->query("delete from  reservations where id='".$id."'")) {
		echo"<script>window.location.replace('index.php?page=reservations'); alert('Successfully deleted a reservation');</script>";
	} else{
		echo"<script>window.location.replace('index.php?page=reservations'); alert('Please try it later');</script>";

	}
}










public function getStats(){
	$stats=array();
	//orders
	$q=$this->db->query("select count(id) as count from orders");
	$stats['orders']=$q->fetchColumn();
	//reservations
		$q=$this->db->query("select count(id) as count from reservations where status =1");
	$stats['reservations']=$q->fetchColumn();

	//food
		$q=$this->db->query("select sum(orders_foods.quantity) as count from foods inner join orders_foods on foods.id=orders_foods.food_id inner join orders on orders_foods.order_id=orders.id and orders.status=1");
	$stats['foods']=$q->fetchColumn();

	//money
		$q=$this->db->query("select sum(price) as count from orders where status=1");
	$stats['money']=$q->fetchColumn();

	return $stats;



	
}


}
