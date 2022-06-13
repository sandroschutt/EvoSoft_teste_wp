<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/product-carousel.css">
    <title>Document</title>
</head>

<body>
    <div style="
    display: flex;
    justify-content: center;
    margin-bottom: 80px;
    ">
        <div class="card text-bg-dark mb-3" style="
                min-width: 300px;
                max-width: 30%;
                width: -webkit-fill-available;
                margin-top: 10%;">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="" style="padding: 10px;">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="loginEmail" placeholder="seu@email.com" required="">
                    </div>
                    <div class="mb-3">
                        <label for="senhaLogin" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senhaLogin" placeholder="" required="">
                    </div>
                    <button type="button" class="btn btn-info text-light" style="margin-top: 10px; align-self: center;">Entrar</button>
                    <p style="font-size: 12px; margin-top: 10px;">Não possui uma conta? Faça o <a href="cadastro" class="link-primary">cadastro.</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>