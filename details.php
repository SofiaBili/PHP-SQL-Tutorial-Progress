<?php
	include('config/db_connect.php');
	//check GET request id parameter
	if(isset($_GET['id'])){
		$id=mysqli_real_escape_string($conn, $_GET['id']);

		//make sql
		$sql = "SELECT * FROM pizzas WHERE id=$id";

		$result = mysqli_query($conn,$sql);

		//fetch result
		$pizza = mysqli_fetch_assoc($result);
		
	}
	//delete id
	if(isset($_POST['delete'])){
		$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
		$sql = "DELETE FROM pizzas WHERE id=$id_to_delete";
		$result = mysqli_query($conn,$sql);
		if($result){
			//success
			header('Location: project1.php');
		}else{
			echo "query error: " . mysqli_error($conn);
		}
	}
	
	//free result
	mysqli_free_result($result);
	//close conn
	mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<?php include('templates/header.php'); ?>
<div class="container center brown-text">
	<?php if($pizza): ?>
		<h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
		<p>Created by: <?php echo htmlspecialchars($pizza['email']);?></p>
		<p><?php echo date($pizza['created_At']); ?></p>
		<h5>Ingredients</h5>
		<p><?php echo $pizza['ingredients']; ?></p>
		<!--DELETE FORM-->
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>">
			<input type="submit" name="delete" value="delete" class="btn brand z-depth-0">
		</form>
	<?php else: ?>
		<h5>No such pizza exists</h5>
	<?php endif ?>
</div>
<?php include('templates/footer.php'); ?>

</html>