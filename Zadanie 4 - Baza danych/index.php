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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID, NAME, SURNAME FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Name: " . $row["NAME"]. " " . $row["SURNAME"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<br>
<a href="index2.php">Do dodawnia do bazy</a>
<br>
<a href="index3.php">Do usuwania z bazy</a>
</body>
</html>
