<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <?= validation_errors(); ?>
    <?= form_open("Granjero/registrar/validar")?>

    <label for="id">ID</label>
    <input type="input" name="id" placeholder="Documento de identidad" /><br />

    <label for="nombre">NOMBRE</label>
    <input type="input" name="nombre" /><br />
    
    <label for="edad">EDAD</label>
    <input type="input" name="edad" /><br />

    <label for="sexo">SEXO</label>
    <input type="input" name="sexo" placeholder="F o M"/><br />

   <input type="submit" name="registrar" value="Registrar" />

  <?= form_close()?>
  </body>
</html>