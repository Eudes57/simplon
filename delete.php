<?php 
$id = $_GET['id'];

if(isset($id) && $id != '')
{
    $dbh = new PDO('mysql:host=localhost;dbname=participants', 'root', '');

    $result = $dbh->prepare("DELETE FROM clients WHERE id=?")->execute([$id]);

}
header("Location: /participants/index.php");
var_dump($result);
?>