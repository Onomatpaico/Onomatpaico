<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleindex.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>SAS Soluções :: LOGIN</title>
</head>

<body>
    <div class="main-login">
        <div class="left-login">
            <h1>SAS Solutions</h1>
            <img src="img/svg/papers.svg" class="left-login-img">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <form action="check.php" method="POST" class="form">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="login_user" placeholder="Usuário">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="pass_user" placeholder="Senha">
                    </div>
                    <input type="submit" class="btn-login">
                </form>
                <div class="ttoggle">
                    <input id="switch" type="checkbox" name="theme">
                    <label class="text-label" for="switch">Toggle</label>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="script/Script.js"></script>

</html>