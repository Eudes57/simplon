
<?php
$data = $_POST;
$dbh = new PDO('mysql:host=localhost;dbname=participants', 'root', '');


$stmt = $dbh->prepare("INSERT INTO clients (name, surname, email, phone, address) VALUES (?, ?, ?, ?, ?)");
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $surname);
$stmt->bindParam(3, $email);
$stmt->bindParam(4, $phone);
$stmt->bindParam(5, $address);


$name = $data['name'];
$surname = $data['surname'];
$email = $data['email'];
$phone = $data['phone'];
$address = $data['address'];
// insertion d'une ligne
$result = $stmt->execute();

header("Location: /participants/index.php");

// exit();
?>
