<?php
	$conn = mysqli_connect('localhost', 'sofia','1234','sofia_pizza');
	if(!$conn){
		echo 'error:'. mysqli_connect_error();
	}

	//write query for all pizzas
	$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

	//make query and get results
	$result = mysqli_query($conn,$sql);

	//fetch the rows as an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	//free result
	mysqli_free_result($result);
	//close conn
	mysqli_close($conn);

	//print_r($pizzas);
?>

<!DOCTYPE html>
<html>
	<?php include('templates/header.php'); ?>
	<h4 class="center grey-text">Pizzas</h4>
	<div class="container">
		<div class="row">
			<?php foreach($pizzas as $pizza){?>
				<div class="col s6 m3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
							<div><?php echo htmlspecialchars($pizza['ingredients']); ?></div>
						</div>
						<div class="card-action right-align">
							<a href="#" class="brand-text">more info</a>
						</div>
					</div>
				</div>
			<?php }?>

		</div>
	</div>
	<?php include('templates/footer.php'); ?>

</html>