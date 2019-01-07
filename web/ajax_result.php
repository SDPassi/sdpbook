<?php
include ("conn.php");

if (isset($_POST['proceed'])){
	$album = $_POST['search'];
	$query = "select product_name from inventory where product_name like '%$album%'";
	$execQuery = mysqli_query($con,$query);
	while($result = mysqli_fetch_array($execQuery))
	{
		?>
		<a onclick='insert("<?php echo $result['product_name']?>")'>
		<?php echo $result['product_name']?>
		</a>
		<?php
		
	}
}
if (isset($_POST['ok'])){
	$album = $_POST['search'];
	$query= "select * from inventory where product_name = '$album'";
	$execQuery = mysqli_query($con, $query);
	while($result = mysqli_fetch_array($execQuery))
	{
		?>
		<div class="container" style="width:;float:left;">
   								<a href=details.php?book_id="products/'.$search_result['product_id'].'">
								<img src="images/'.$search_result['product_image'].'.jpg"/;></a>
   								 <div class="" style="width:70%;float:right;padding-top:20px;">
		  								<h3>'.$search_result['product_name'].'</h3>   <br>
	      								<h4>RM '.$search_result['product_price'].'</h4><br>
	      								'.$search_result['product_description'].' 
	      								<br>
	          							<br>
	          							<br>
				<form method = "post" style="margin-bottom:20px;">
					<input type="hidden" name="book_id" value="'.$search_result['product_id'].'">
					<input style = "width:25px;" name = "quantity" type = "hidden" value = "1"/>
					<input type = "submit" value = "Add To Cart" style = width:185px;>
				</form>
							</div>
	
			</div> 
						
			<?php
		}
		exit();
	}
	?>					
	