<?php
include_once 'class.product.php';

class Order
{
	private $user_id;
	private $cart_pro;
	private $checkout = array();
	private $order_details = array();
	private $array = array();

	// PRODUCT ADD TO CART
	public function productAddCart($p_id, $user_id)
	{
		$mysqli = new Database();
		
		$succ = array();

		$query = "INSERT INTO add_cart(p_id,user_id, created_at) VALUES (".$_GET['id'].",".$user_id.", now())";
		
		$res = $mysqli->connection->query($query);
		
		if($res){
			$succ[] = 'product added to cart successfully';
			if(!(empty($succ)))
			{
				$_SESSION['succ'] = $succ;
			}
			header("Location:../add_cart.php");
			
		}else{
			$this->array['success'] = false;
			$this->array['message'] = 'error poduct added to cart';
		}
		return $this->array;
	}

	//product add to wishlist
	public function addwishlist($p_id, $user_id)
	{
		$mysqli = new Database();
		// $mysqli = $this->connection;
		// var_dump($mysqli->connection);
		// exit;
		$query = "INSERT INTO wishlist(p_id,u_id) VALUES (".$_GET['id'].",".$user_id.")";
		// print_r($query);
		// exit;
		$res = $mysqli->connection->query($query);
		// print_r($res);
		// exit;
		if($res){
			$succ[] = 'product added to wishlist successfully';
			if(!(empty($succ)))
			{
				$_SESSION['succ'] = $succ;
			}
			header("Location:../wishlist.php");
		}else{
			$this->array['success'] = false;
			$this->array['message'] = 'error poduct added to cart';
		}
		return $this->array;
	}

	//delete order
	public function delete()
	{
		$mysqli = new Database();
		
		$q = "DELETE FROM orders WHERE id={$_GET['id']}";

      	$res = $mysqli->connection->query($q);
	}

	//delete add_cart
	public function delete_cart()
	{
		$mysqli = new Database();

		$succ1 = array();

		$query = "DELETE FROM add_cart WHERE id={$_GET['id']}";
		// print_r($query);
		// exit;

		$res = $mysqli->connection->query($query);

		if($res)
		{
			$succ1[] = "Product delete successfull";

			if(!(empty($succ1)))
			{
				$_SESSION['succ1'] = $succ1;
			}
			header("Location:../add_cart.php");
						
		}
	}

	//delete wishlist
	public function delete_wishlist()
	{
		$mysqli = new Database();

		$query = "DELETE FROM wishlist WHERE id={$_GET['id']}";
		// print_r($query);
		// exit;

		$res = $mysqli->connection->query($query);

		if($res)
		{
			$succ1[] = "Product delete from wishlist successfull";

			if(!(empty($succ1)))
			{
				$_SESSION['succ1'] = $succ1;
			}
			header("Location:../wishlist.php");
						
		}

	}

	//result display
	public function buy_now()
	{
		$mysqli = new Database();

		$query = "SELECT * FROM `buy_now` JOIN product ON product.id=buy_now.p_id";
                
		$res = $mysqli->connection->query($query);
	}

	//order insert
	public function order_now($user_id)
	{
		$mysqli = new Database();
		
		$query = "INSERT INTO `orders`(`user_id`) VALUES ('$user_id')";
		// var_dump($query);
		// exit;		
		$res = $mysqli->connection->query($query);

		if($res)
		{
			$succ[] = 'Ordered successfull';
			if(!(empty($succ)))
			{
				$_SESSION['succ'] = $succ;
			}
			header("Location:add_cart.php");
		}

		$last_order_id = $mysqli->connection->insert_id;
		
		return $last_order_id;
		
	}

	//product order 
	public function order_items($qty , $last_order_id){
		
		$mysqli = new Database();
		
		$product = new Product();
				
		$prod = $product->product_display();
		// echo "<pre>";
		// print_r($products_id);
		// exit;
		// var_dump($product->productdisplay());
		// exit;
		// echo "<pre>";
		// var_dump($prod);
		// exit;
		foreach($qty as $key=>$pro)
		{
			// echo "<pre>";
			// print_r(count($products_id));
			
			// print_r($products_id);
			// print_r($pro);
			// exit;
		$query = "INSERT INTO order_items(`order_id`, `p_id`, `quantity`, `unit_price`) VALUES ('$last_order_id','$key','$pro','".$prod['mrp']."')";
		// print_r($query);
		// exit;

		$res = $mysqli->connection->query($query);
		if($res)
		{
			// echo "success";
			header('Location:../add_cart.php');
		}
		else
		{
			// echo "error";
			header('Location:../add_cart.php');	
		}
		}
	} 

	//add_cart 
	public function cart()
	{
		$mysqli = new Database();

		$query = "SELECT add_cart.id,product.id as pro_id,product.productname,product.image,product.mrp,product.quantity,product.id as p_id,user.id as u_id , user.username FROM `add_cart` JOIN product ON product.id=add_cart.p_id JOIN user ON add_cart.user_id=user.id WHERE add_cart.user_id='".$_SESSION['USER_ID']."'";
                // print_r($query);
				// exit;
		$mysqli->connection->query($query);

		$result = $mysqli->connection->query($query);

		return $result->fetch_all(MYSQLI_ASSOC);
	}

	//wishlist
	public function wishlist()
	{
		$mysqli = new Database();

		$query = "SELECT wishlist.id,product.id as pro_id,product.productname,product.image,product.mrp,product.quantity,product.id as p_id,user.id as u_id , user.username FROM `wishlist` JOIN product ON product.id=wishlist.p_id JOIN user ON wishlist.u_id=user.id WHERE wishlist.u_id=	'".$_SESSION['USER_ID']."'";

		$mysqli->connection->query($query);

		$result = $mysqli->connection->query($query);

		return $result->fetch_all(MYSQLI_ASSOC);
	}

	// CHANGE SESSION ID TO USER ID
	public function sessionIdToUserId()
	{
		$mysqli = new Database();
		$query = "UPDATE `add_cart` SET `user_id`='".$_SESSION['USER_ID']."', `updated_at`= now() WHERE `user_id` = '".session_id()."'";
		if($mysqli->connection->query($query)) {

			//DELETE DUPLICATE RECORDS FROM CART
			$delete = "DELETE FROM add_cart WHERE `user_id` = '".$_SESSION['USER_ID']."' AND id NOT IN (SELECT * FROM (SELECT MAX(c.id) FROM cart c GROUP BY c.`p_id`, c.`user_id`) x)";
			$mysqli->connection->query($delete);
		}
	}

	// SELECT ORDER 
	// public function selectOrder($id)
	// {
	// 	$mysqli = new Database;
	// 	$query = "SELECT * FROM `add_cart` JOIN `products` ON cart. p_id = products. id WHERE `user_id` = '".$id."'";

	// 	$result = $mysqli->connection->query($query);
	// 	return $this->checkout = $this->fetch_assoc($result);
	// }

	// SELECT FROM CART
	public  function selectFromCart($user_id)
	{
		$mysqli = new Database;
		$query = "SELECT c.id,p.productname,p.image,p.mrp,p.quantity FROM product AS p JOIN add_cart AS c ON c.p_id = p.id WHERE c.user_id = '".$user_id."'";
		// print_r($query);
		// exit;

		$result = $mysqli->connection->query($query);
		// print_r($result);
		// exit;
		return $this->cart_pro = $result->fetch_assoc();
	}

	//select from wishlist
	public  function selectwishlist($user_id)
	{
		$mysqli = new Database;
		$query = "SELECT w.id,p.productname,p.image,p.mrp,p.quantity FROM product AS p JOIN wishlist AS w ON w.p_id = p.id WHERE w.u_id ='".$user_id."'";
		// print_r($query);
		// exit;

		$result = $mysqli->connection->query($query);
		// print_r($result);
		// exit;
		return $this->cart_pro = $result->fetch_assoc();
	}

	// USER ORDER LIST
	// public function userOrderList()
	// {
	// 	$mysqli = $this->connection();
	// 	$query = "SELECT * FROM `order_master` WHERE `user_id` = ".$_SESSION['USER_ID'];

	// 	$result = $mysqli->query($query);
	// 	return $this->order_details = $this->fetch_assoc($result);
	// }

	// NUMBER OF PRODUCT IN CART
	public function cartProduct($user_id)
	{
		$mysqli = new Database;
		$query ="SELECT `p_id` FROM `add_cart` WHERE `user_id` = '".$user_id."'";

		$result = $mysqli->connection->query($query);
		return $number = $result->num_rows;
	}

	// CHECK PRODUCT IS ALREADY ADDED RO NOT BY SAME USER
	public function orderExists($prod_id, $user_id)
	{
		$mysqli = new Database;
		$query = "SELECT `p_id` FROM `add_cart` WHERE `p_id` = '" .$prod_id. "' AND `user_id` = '" .$user_id. "'";

		$result = $mysqli->connection->query($query);
		$number = $result->num_rows;
	}

	// DELETE SINGLE PRODUCT FROM CART
	public function deleteCartProduct($id)
	{
		$mysqli = new Database;
		$query = "DELETE FROM `add_cart` WHERE `id` = '".$id."'";
		$mysqli->connection->query($query);
	}

	// CHANGE PRODUCT QUANTITY
	public function updateOuantity($qty, $id)
	{
		$mysqli = new Database;
		$query = "UPDATE `add_cart` SET `quantity`= '".$qty."' ,`updated_at`=now() WHERE `id` = '".$id."'";
		$mysqli->connection->query($query);
	}
}
?>