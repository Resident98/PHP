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
$id=$_POST['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Nie udało połączyć się z bazą: " . $conn->connect_error);
} 

$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Rekord usunięty";
} else {
    echo "Błąd: " . $conn->error;
}

$conn->close();
?>
<br>
<a href="index.php">Powrót na stronę główną</a>
</body>
</html>
