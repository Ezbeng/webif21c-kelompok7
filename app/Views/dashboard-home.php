<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/navigasi.css">
    <link rel="stylesheet" href="assets/css/styleutama.css">
    <link rel="stylesheet" href="assets/css/table.css">
</head>

<body>
    <div class="container-page">
        <?php include '../app/Views/modules/navigasi.php';?>
        
        <div class="container-content">

            <?php 
                include '../app/Views/modules/nav-top.php'; 
                include '../app/Views/modules/table.php';
            ?>
            

        </div>
    </div>


    <script src="assets/js/navigasi.js"></script>
    <script src="assets/js/jsutama.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
    <script type='text/javascript'src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>
