<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patika |Odev 6</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

if(isset($_GET['id'])) {

    $urunkod=$_GET['id'];
}
?>

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <img class="img-fluid" src="img/<?php echo $urunkod ?>.png">
        </div>

        <div class="text-center mb-5">
            <a href="index.html" class="btn btn-secondary">Anasayfaya Git</a>
        </div>
    </div>
    
</div>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.min.js.map"></script>
</body>
</html>