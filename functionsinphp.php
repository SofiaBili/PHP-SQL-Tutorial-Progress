<?php
	function sayHello($name='Y/N'){
		echo "hello $name <br/>";
	}
	sayHello('Sofia');
	sayHello();

	function formatProduct($product){
		return "{$product['name']} costs {$product['price']} euros to buy <br/>";
	}

	echo formatProduct(['name'=>'phone','price'=>300]);


	//pass by reference
	$name = 'sofia';
	function sayBye(&$name){
		echo "bye $name <br/>";
		$name = 'john';
	}
	sayBye($name);
	sayBye($name);
	echo $name;
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP tutorial functions></title>
</head>
<body>
	
</body>
</html>