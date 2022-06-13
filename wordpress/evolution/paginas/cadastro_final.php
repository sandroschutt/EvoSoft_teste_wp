<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
<div style="
    display: flex;
    justify-content: center;">
        <div class="card text-bg-dark mb-3" style="
                min-width: 300px;
                max-width: 95%;
                width: -webkit-fill-available;
                margin-top: 10%;">
            <div class="card-header">Suas Informações</div>
            <div class="card-body">
                <form action="" style="padding: 10px;">
                    <div class="mb-3">
                        <label for="inputNome" class="form-label">Nome completo:</label>
                        <input type="email" class="form-control" id="inputNome" placeholder="" required="">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="name@example.com" required="">
                    </div>
                    <div class="mb-3">
                        <label for="senhaCadastro" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senhaCadastro" placeholder="" required=>
                    </div>
                    <div class="mb-3">
                        <label for="repetirEmail" class="form-label">Informe o email novamente:</label>
                        <input type="email" class="form-control" id="repetirEmail" placeholder="name@example.com" required="">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone/celular:</label>
                        <input type="text" class="form-control" id="telefone" placeholder="(00) 0 0000-0000" required="">
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00" required="">
                    </div>
                    <div class="mb-3">
                        <!-- aqui vai a busca por cep do ViaCEP -->
                        <label for="endereco" class="form-label">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" placeholder="Informe o CEP" required="">
                    </div>
                    <!-- Fazer um insert com javascript aqui -->
                    <div style="height: 250px;">
                        aqui vão os dados de endereço
                    </div>
                    <button type="button" class="btn btn-info text-light" style="margin-top: 10px; align-self: center;">Cadastrar</button>
                    <p style="font-size: 12px; margin-top: 10px;">Já possui uma conta? Faça <a href="login">login.</a></p>
                </form>
            </div>
        </div>
    </div>

</body>

</html>