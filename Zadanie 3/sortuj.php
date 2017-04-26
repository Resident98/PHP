<!Doctype HTML>
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
	<?php 
		$array=[$_POST["a"],$_POST["b"],$_POST["c"],$_POST["d"],$_POST["e"]];
		rsort($array);
		echo $array[0].", ".$array[1].", ".$array[2].", ".$array[3].", ".$array[4].".";
	?>
	<?php
		$x=5;
		function myTest()
		{
			global $x;
			$x++;
			echo "<p>Variable x inside function is: $x</p>";
		}
		myTest();
		echo "<p>X poza funkcją:$x</p>";
	?>
	<?php
		function foo()
		{
			static $x=0;
			echo $x;
			$x++;
		}
		foo();
		foo();
		foo();
	?>
 </body>
</html>