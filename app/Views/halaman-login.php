<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="/assets/css/styleutama.css">
</head>
<body style="background-image: url('assets/images/Universitas_Teknokrat_Indonesia.jpg');">
    <div class="container-form">
        <form action="Home/login" class="form-case" method="POST">
            <img src="/assets/images/UNIVERSITASTEKNOKRAT.png" width="100px" alt="" class="avatar-login">
            <label for="" class="title-form">SISFO M.D.A TEKOKRAT</label>
            <label for="">Username</label>
            <input type="text" class="username" placeholder="Username" name="username" id="username" >
            <label for="">Password</label>
            <input type="password" class="password" placeholder="Password" name="password" id="password">
            <label>
                <input type="checkbox">Ingat Password
            </label>                  
            <br>
            <input type="submit" class="submit" value="LOGIN">  
            <?php if (session()->has('error')) : ?>
                <div class="alert alert-danger"><?= session('error') ?></div>
            <?php endif; ?>              
        </form> 
    </div>
</body>
</html>
