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
    <?= form_open("Finca/lista_especifica/validar")?>

    <label for="id_finca">ID FINCA</label>
    <input type="input" name="id_finca" placeholder="Documento de identidad" /><br />

    <label for="id_granjero">ID GRANJERO</label>
    <input type="input" name="id_granjero" /><br />

   <input type="submit" name="registrar" value="Registrar" />

  <?= form_close()?>
  </body>
</html>