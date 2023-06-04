

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participants</title>
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Nouveau participant</h2>
        <form method="post" action='/participants/create.php'>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nom</label>
                <div class="col-sm-6">
                    <input type="text" class=" form-control" name="name" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Prenom</label>
                <div class="col-sm-6">
                    <input type="text" class=" form-control" name="surname" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"> Email</label>
                <div class="col-sm-6">
                    <input type="text" class=" form-control" name="email" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class=" form-control" name="phone" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Adresse</label>
                <div class="col-sm-6">
                    <input type="text" class=" form-control" name="address" value="">
                </div>
            </div>

            <div class="row mb-3">
                <div class="offset-sm-3  col-sm-3 d-grid">
                   <button type="submit" class="btn btn-primary">Envoyer</button>
                 </div>
                 <div class=" col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/participants/index.php" role="button">Supprimer</a>
                 </div>
            </div>
        </form>
    </div>
</body>
</html>