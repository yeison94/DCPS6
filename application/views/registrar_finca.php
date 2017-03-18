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
    <?= form_open("Finca/registrar/validar")?>

    <label for="id_granjero">ID</label>
    <input type="input" name="id_granjero" placeholder="Documento del dueño" /><br />

    <label for="nombre">NOMBRE</label>
    <input type="input" name="nombre" /><br />
    
    <label for="valor_propiedad">VALOR PROPIEDAD</label>
    <input type="input" name="valor_propiedad" /><br />

    <label for="cantidad_vacas">CANTIDAD VACAS</label>
    <input type="input" name="cantidad_vacas" /><br />

    <label for="cantidad_gallinas">CANTIDAD GALLINAS</label>
    <input type="input" name="cantidad_gallinas" /><br />

   <input type="submit" name="registrar" value="Registrar" />

  <?= form_close()?>
  </body>
</html>