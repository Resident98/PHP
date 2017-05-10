<!Doctype HTML>
<html>
<head>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb.";
$name=$_POST["name"];
$surname=$_POST["surname"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Nie udało połączyć się z bazą: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (NAME, SURNAME)
VALUES ('$name', '$surname')";

if ($conn->query($sql) === TRUE) {
    echo "Nowy rekord dodany";
} else {
    echo "Błąd: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br>
<a href="index.php">Powrót na stronę główną</a>
</body>
</html>
