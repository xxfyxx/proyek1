<?php include('php/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DK Konser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #A52A2A;
}

.login{

border: none;
outline: none;
padding: 8px;
width: 252px;
color: #8B0000;
font-size: 16px;
cursor: pointer;
margin-top: 20px;
border-radius: 5px;
background: #A9A9A9;
}

h1 {
    margin: 200px;
    text-align: left;
    font-weight: bolder;
    text-transform: uppercase;
}

button {
    border: none;
    outline: none;
    padding: 8px;
    width: 252px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 5px;
    background: #8B0000;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="topnav">
            <a class="" href=""><i></i></a>
       </div>
    </div>
        
    <div class="masuk">
        <h1>Register</h1>
    </div>

    <div class="container">
        <div class="form">
            <form action="" method="post">
                <div class="login">
                    <div>
                        <label for="real_name">Nama Kamu</label>
                    </div>
                    
                    <div>
                        <input class="form-input-underline" id="real_name" type="text" class="validate" name="real_name">
                    </div>
                </div>

                <div class="login">
                    <div>
                        <label for="username">Username</label>
                    </div>
                    
                    <div>
                        <input class="form-input-underline" id="username" type="text" class="validate" name="username">
                    </div>
                </div>

                <div class="login">
                    <div>
                        <label for="password_1">Password</label>
                    </div>
                    
                    <div>
                        <input class="form-input-underline" id="password_1" type="password" class="validate" name="password_1">
                    </div>
                </div>

                <div class="login">
                    <div>
                        <label for="password_2">Ulangi Kembali Password</label>
                    </div>
                    
                    <div>
                        <input class="form-input-underline" id="password_2" type="password" class="validate" name="password_2">
                    </div>
                </div>
            <form>

            <div class="login2">
                <center>
                    <button type="submit" class="btn_solid-main" name="reg_user">Sign Up</button>
                </center>
            </div>
            <div>
                <p>
                    Sudah Punya Akun?  <a href="login.php">Login Sekarang</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
