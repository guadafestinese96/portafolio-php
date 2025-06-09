<?php
$phoneNumber = "5491161950112";
$message = "Hola Guadalupe, te contacto desde tu portafolio";
$messageEncoded = urlencode($message);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Guadalupe Festinese | Web Developer</title>
  <script src="https://kit.fontawesome.com/ed646fcdbc.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo RUTA; ?>/assets/css/styles.css" />
</head>

<body>

  <header class="header">
    <a href="<?php echo RUTA; ?>">
      <img src="<?php echo RUTA; ?>/images/g2.png" alt="logo" class="logoHeader" /></a>
    <div class="listas">


      <ul class="sections">

        <li class="liHeader"><a href="<?php echo RUTA; ?>/proyectos.php" class="aHeader">proyectos</a></li>
        <li class="liHeader"><a href="<?php echo RUTA; ?>/skills.php" class="aHeader">skills</a></li>
        <li class="liHeader"><a href="<?php echo RUTA; ?>/studies.php" class="aHeader">estudios</a></li>
      </ul>
      <ul class="contactIcons">
        <li class="liHeader"><a href="<?php echo RUTA; ?>/contact.php" class="aHeader">contacto</a></li>
        <li class="liHeader"><a href="https://www.linkedin.com/in/guadalupe-festinese-bb05b82a4" target="_blank" class="aHeader"><i class="fa-brands fa-linkedin-in"></i></a></li>
        <li class="liHeader"><a href="https://github.com/guadafestinese96" target="_blank" class="aHeader"><i class="fa-brands fa-github icons"></i></a></li>
        <li class="liHeader">
          <a href="https://wa.me/<?php echo $phoneNumber; ?>?text=<?php echo $messageEncoded; ?>" target="_blank" class="aHeader"><i class="fa-brands fa-whatsapp icons"></i></a>
        </li>

      </ul>
    </div>
  </header>

  <main class="main">