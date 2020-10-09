<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('assets/css-padrao/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css-custom/css.css')?>">
    <title>Document</title>
    <style>
        body
        {
            background-image: url('<?php echo base_url("assets/img/luky.jpg")?>');
        }
    </style>
</head>
<body>
<div class="w-50 div1 my-5 mx-auto">
    <h3 class="text-center text-primary f mt-3">Fazer Cadastro</h3>
    <div class="colorB">
<form action='<?php echo base_url("index.php/ValidarCadastros/validarCadUsuario")?>' method="POST" name="cadastro" id="cadastro">
    <div class="form-row col-10 mx-auto" id="nome">
        <input class="form-control mx-auto" type="text" placeholder="Nome" name="nome" id="nome">
    </div>
    <div class="form-row col-10 mx-auto mt-3 m-3" id="CPF">
        <input class="form-control" type="text" placeholder="CPF" name="cpf" id="cpf">
    </div>
    <div class="form-row col-10 mx-auto mt-3 m-3" id="usuario">
        <input class="form-control mx-auto" type="text" placeholder="Usuário" name="user" id="user">
    </div>
    <div class="form-row col-10 mx-auto mt-3 m-3" id="email">
        <input class="form-control" type="text" placeholder="E-mail" name="email" id="email">
    </div>
    <div class="form-row col-10 mx-auto  mt-1" id="senha">
        <input class="form-control mx-auto" type="password" placeholder="Senha" name="pass" id="pass">
    </div>
    <div class="form-row col-10 mx-auto mt-3 m-3" id="senha2">
        <input class="form-control" type="password" placeholder="Confirmar Senha" name="pass2" id="pass2">
    </div>
    <div class=" col-11 mx-auto mb-5 ">
        <input class="form-control col-6 mx-auto btn-outline-primary" type="submit" value="ENTRAR">
    </div>
    </div>
    </form>
    </div>
    <script src='<?php echo base_url("assets/node_modules/jquery/dist/jquery.js")?>'></script>
    <script src='<?php echo base_url("assets/node_modules/popper.js/dist/umd/popper.js")?>'></script>
    <script src='<?php echo base_url("assets/node_modules/bootstrap/dist/js/bootstrap.js")?>'></script>
    <script src='<?php echo base_url("assets/node_modules/sweetalert2/dist/sweetalert2.all.js")?>'></script>
</body>
</html>