<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css-padrao/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css-custom/css.css')?>">
    <title>Login</title>
    <style>
        body{
            background-image:url('<?php echo base_url("assets/img/luky.jpg")?>');
            background-position: center;
            background-repeat: no-repeat;
            }
    </style>
</head>
<body>
<div class="m1">
        <div class="w-50 div1 my-5 mx-auto">
        <h1 class="text-center text-primary f mt-5" >BEM VINDO</h1>
        <div class="colorB">
            <h3 class="text-center text-primary f ">Fazer login</h3>
            <form action='<?php echo base_url("index.php/Login/validarLogin")?>' method="POST" id="login" name="login">
                <div class="form-row col-10 mx-auto  mt-1" id="email">
                    <input class="form-control mx-auto" type="text" placeholder="E-mail" name="user" id="user">
                </div>
                <div class="form-row col-10 mx-auto mt-3 m-3 " id="V">
                    <input class="form-control" type="password" placeholder="Senha" name="pass" id="pass">
                    <div class="invalid-feedback d-none col-8" id="passErro">Por favor, digite sua senha.</div>
                    <div class="invalid-feedback d-none col-8" id="userErro">Por favor, digite seu email ou nome de usuário.</div>
                    <div class="invalid-feedback d-none col-8" id="userErrol">Email ou senha não encontrado.</div>
                    <a class="nav-link lead" style="font-size: 14px" href="#">Esqueci meu email</a>
                </div>
                <div class="form-row col-10 mx-auto mb-5 ">
                <a class="nav-link col-6 lead text-center Negrito" href="index.php/Welcome/cadastro">Criar Conta</a>
                    <input class="form-control col-6 mx-auto btn-outline-primary" type="submit" value="ENTRAR">
                </div>
            </div>
        </div>
            </form>
        </div>
       
    <script src='<?php echo base_url("assets/node_modules/jquery/dist/jquery.js")?>'></script>
    <script src='<?php echo base_url("assets/node_modules/popper.js/dist/umd/popper.js")?>'></script>
    <script src='<?php echo base_url("assets/node_modules/bootstrap/dist/js/bootstrap.js")?>'></script>
    <script src='<?php echo base_url("assets/node_modules/sweetalert2/dist/sweetalert2.all.js")?>'></script>
    <script src='<?php echo base_url("assets/jvscript/validacao.js")?>'></script>
</body>
</html>