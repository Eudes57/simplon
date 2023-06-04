<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participants</title>
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
      <h2>Liste de participants</h2>
      <a class="btn btn-primary" href="/participants/formulaire.php"  role="button">Nouveau</a>
      <br>
      <table class="table">
<thead>
    <tr>
        <th></th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Adresse</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
   

   
<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=participants', 'root', '');

    // foreach($dbh->query('SELECT * from clients') as $row) {
    //     echo '<pre>';
    //     print_r($row['name']);
    //     echo '</pre>';
    //     $clients = $row;
    // }
    $clients = $dbh->query('SELECT * from clients');
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
    <?php 
    if(!empty($clients)){
        $compteur = 0;
        foreach($clients as $client){
            $compteur++;
            $client = (array)$client;
        
            $originalDate = $client['created_at'];
$date = date("d-m-Y H:i:s", strtotime($originalDate));

            ?>

        
    
    <tr>
        <td><?php echo $compteur;?></td>
        <td><?php echo $client['name'];?></td>
        <td><?php echo $client['surname'];?></td>
        <td><?php echo $client['email'];?></td>
        <td><?php echo $client['phone'];?></td>
        <td> <?php echo $client['address'];?></td>
        <td><?php echo $date;?></td>
        <td>
            <a class='btn btn-danger btn-sm'  href="<?php echo '/participants/delete.php?id='.$client["id"]; ?>">Supprimer</a>
        </td>
    </tr>
    <?php  }
    }
    ?>
</tbody>
      </table>
    </div>
</body>
</html>