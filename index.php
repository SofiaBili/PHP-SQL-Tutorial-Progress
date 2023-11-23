<?php
	//variables
	$name = 'Sofia';
	$age = 23;
	//strings
	$stringOne = 'my email is ';
	$stringTwo = 'sofia.bili@yahoo.gr';
	/*
	//length
	echo strlen($name);
	//upper and lower
	echo strtoupper($name);
	echo strtolower($name);
	//replace Sofia->Sofi
	echo str_replace('a','',$name);
	//arrays
	$numbers1 = ['1','2','3'];
	$numbers2 = array('1','2','3');
	//add at the end
	$numbers2[] = '4';
	print_r($numbers2);//Array ( [0] => 1 [1] => 2 [2] => 3 ) 
	//merge
	$numbers3 = array_merge($numbers1,$numbers2);
	print_r($numbers3);

	$persons_age =['sofia'=>'23','jason'=>'21','john'=>15];

	$persons_age['maria']='2';
	print_r($persons_age);
	echo count($persons_age);
	*/
	//loops
	$products = [
		['name'=>'tomato','price'=>1.20],
		['name'=>'potato','price'=>1.10],
		['name'=>'milk','price'=>2.25],
		['name'=>'orange juice','price'=>3.75],
	];

	//see products with price between 1 and 2
	foreach($products as $pr){
		if($pr['price']<2 && $pr['price']>1){
			echo $pr['name'].'<br/>';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP tutorial></title>
</head>
<body>
	<h1>User Profile Page</h1>
	<div><?php echo $name ?></div>

	<!-- concatinate strings -->
	<div><?php
		echo $stringOne . $stringTwo;
		echo "<br/> My name is $name ";
	?></div>
	<!-- get first character of name -->
	<div><?php
		echo $name[0] . '<br/>';
	?></div>
	<!-- show products -->
	<h1>Products</h1>
	<ul>
		<?php foreach($products as $product){ ?>
			<h3><?php echo $product['name']; ?></h3>
			<p> <?php echo $product['price'] ?></p>
			<?php } ?>
	</ul>
</body>
</html>