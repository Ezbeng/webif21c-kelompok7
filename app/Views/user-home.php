<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Users</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="assets/css/navigasi.css">    
  </head>

  <body id="body-pd">
    <?php 
      include '../app/Views/modules/navigasi.php';
    ?>
    
    <h4>Halaman ini berisikan data dari user/akun dari Manajemen Data dan Asset Kampus</h4>
    <table>
        <?php foreach ($users as $user) : ?>
          <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['username'] ?></td>
            <td><?= $user['password'] ?></td>
            <td><?= $user['cookie'] ?></td>
          </tr>
        <?php endforeach; ?>
    </table>
    <script src="assets/js/navigasi.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
  </body>
</html>
