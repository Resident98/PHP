<!Doctype HTML>
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
	$a=$_POST["a"];
	$b=$_POST["b"];
	$c=$_POST["c"];
	$delta=$b*$b-4*$a*$c;
	if($delta>0)
	{
		$x1=(-$b-sqrt($delta))/2*$a;
		$x2=(-$b+sqrt($delta))/2*$a;
		print("Rownanie ma dwa rozwiazania.<br>");
		print("x1=$x1"."<br>");
		print("x2=$x2"."<br>");
	}else if($delta==0)
	{
		$x=(-$b)/2*$a;
		print("Rownanie ma jedno rozwiazanie.<br>");
		print("x=$x"."<br>");
	}else if($delta<0)
	{
		print("Brak rozwiazan.<br>");
	}
?>
<a href="index.php">Rozwiaz raz jeszcze</a>
 </body>
</html>