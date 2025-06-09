<?php require 'header.php' ?>
<div class="container">
  <h2 class="title">Enviar email</h2>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario">
    <i class="fa-regular fa-envelope emailIcon"></i>
    <div class="labelInput">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" value="<?php if (!$enviado && isset($nombre)) echo $nombre ?>" placeholder="Ingresa tu nombre:">
    </div>

    <div class="labelInput">
      <label for="email">Email</label>
      <input type="email" name="email" value="<?php if (!$enviado && isset($email)) echo $email ?>" placeholder="Ingresa tu email:">
    </div>

    <div class="labelInput">
      <label for="mensaje">Mensaje</label>
      <textarea name="mensaje" placeholder="Mensaje:"><?php if (!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
    </div>


    <?php if (!empty($errores)): ?>
      <div class="alert error" role="alert">
        <?php echo $errores; ?>
      </div>
    <?php elseif ($enviado) : ?>
      <div class="alert success" role="alert">
        <?php echo 'Enviado Correctamente! (Por políticas del servidor gratuito no se puede enviar el correo, pero el código y validaciones están programadas como si lo hiciera.)'; ?>
      </div>
    <?php endif; ?>


    <input type="submit" name="submit" value="Enviar Mensaje" class="btnSubmit">

  </form>
</div>
<?php require 'footer.php' ?>