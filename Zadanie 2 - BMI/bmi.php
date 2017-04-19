<!Doctype HTML>
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
	$waga=$_POST["waga"];
	$wzrost=$_POST["wzrost"];
	$BMI=$waga/($wzrost*$wzrost);
	print("$BMI"."<br>");
	if($BMI<16.0)
	{
		print("Wygłodzenie");
	}else if($BMI>=16.0&&$BMI<17.0)
	{
		print("Wychudzenie");
	}else if($BMI>=17.0&&$BMI<18.5)
	{
		print("Niedowaga");
	}else if($BMI>=18.5&&$BMI<25.0)
	{
		print("Waga prawidłowa");
	}else if($BMI>=25.0&&$BMI<30.0)
	{
		print("Nadwaga");
	}else if($BMI>=30.0&&$BMI<35.0)
	{
		print("I stopień otyłości");
	}else if($BMI>=35.0&&$BMI<40.0)
	{
		print("II stopień otyłości");
	}else if($BMI>=40.0)
	{
		print("III stopień otyłości (otyłość skrajna)");
	}
?>
 </body>
</html>