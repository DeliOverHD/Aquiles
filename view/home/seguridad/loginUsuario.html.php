<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/header.php' ?>

</head>
<body>
  <div class="container container-fluid">
    <form class="form-signin" method="post" action="<?php echo $fsConfig->getUrl() ?>index.php/home/usuario/indexUsuario.html.php">
      <h2 class="form-signin-heading">Datos de Usuario</h2>
      <input type="text" autocomplete="off" autofocus required placeholder="Usuario" class="form-control" id="inputUsuario" name="seguridad[nick]">
      <input type="password" required placeholder="Contraseña" class="form-control" id="inputPassword" name="seguridad[pass]">
      <button type="submit" class="btn btn-lg btn-primary btn-block">Identificarse</button>
      <?php if (isset($_SESSION['usuarioInvalido']) === true): ?>
        <br>
        <div class="alert alert-danger" role="alert"><?php echo $_SESSION['usuarioInvalido'] ?></div>
        <?php unset($_SESSION['usuarioInvalido']) ?>
      <?php endif ?>
      <?php if (isset($_SESSION['registroSuccess']) === true): ?>
        <br>
        <div class="alert alert-success" role="alert"><?php echo $_SESSION['registroSuccess'] ?></div>
        <?php unset($_SESSION['registroSuccess']) ?>
      <?php endif ?>
    </form>  
  </div>
  <script src="<?php echo $jqJS ?>"></script>
  <script src="<?php echo $btJS ?>"></script>

</body>
</html>


<?php include_once $fsConfig->getPath() . 'view/parcial/footer.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>