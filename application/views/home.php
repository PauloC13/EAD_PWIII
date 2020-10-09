<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css-padrao/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css-custom/css.css')?>">
    <title>Document</title>
    <style>
        body
        {
            background-image: url(<?php echo base_url("assets/img/luky.jpg")?>);
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg div5">
  <a class="navbar-brand text-dark" href="#" style="border-right: 2px solid black"><h5>Home &nbsp;</h5></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="nav-link text-center btn-outline-dark Negrito" href="<?php echo base_url('index.php/Welcome/index')?>">Sair</a>
    </li>
    </ul>
  </div>
</nav>
  
    <script src='<?php echo base_url("assets/node_modules/jquery/dist/jquery.js")?>'></script>
    <script src='<?php echo base_url("assets/node_modules/popper.js/dist/umd/popper.js")?>'></script>
    <script src='<?php echo base_url("assets/node_modules/bootstrap/dist/js/bootstrap.js")?>'></script>
</body>
</html>