<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>lab11</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="x" placeholder="x">
		<input type="text" name="a" placeholder="a">
		<input type="text" name="b" placeholder="b">
		<input type="text" name="c" placeholder="c">
		<input type="submit" name="submit">
	</form>
	<?php
	class vichisl{
		public $x;
		public $a;
		public $b;
		public $c;
		function __construct($x, $a, $b, $c){
			$this->x=$x;
			$this->a=$a;
			$this->b=$b;
			$this->c=$c;
		}
		function first(){
			if ($this->x <= 3){
				$y = ($this->x ** 2) - 3 * $this->x + 9; 
			}
			else{
				$y = ($this->x ** 3) + 6; 
			}
			echo $y.'<br>';
		}
		function second(){
			$y = $this->a * $this->b + $this->c;
			echo $y;
		}
	}
	if ($_POST['x']!=NULL){
		$fir = new vichisl($_POST['x'], 0, 0, 0);
		$fir->first();
	}
	if ($_POST['a']!=NULL && $_POST['b']!=NULL && $_POST['c']!=NULL){
		$sec = new vichisl(0, $_POST['a'], $_POST['b'], $_POST['c']);
		$sec->second();
	}
	?>
</body>
</html>