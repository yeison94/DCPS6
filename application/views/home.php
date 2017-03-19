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
    <ul>
    <li><a href="<?php echo site_url('Granjero/registrar/formulario')?>">Registrar Granjero</a></li>
    <li><a href="<?php echo site_url('Finca/registrar/formulario')?>">Registrar Finca</a></li>
    <li><a href="<?php echo site_url('Granjero/listar')?>">Listar Granjeros</a></li>
    <li><a href="<?php echo site_url('Finca/listar')?>">Listar Fincas</a></li>
    <li><a href="<?php echo site_url('Finca/lista_especifica/formulario')?>">Listar Finca dado su id y dueño</a></li>
    <li><a href="<?php echo site_url('Granjero/inventario')?>">Granjero con mas vacas y gallinas</a></li>
    <li>Fincas con mas de 3 gallinas y menos de 5 vacas</li>
    </ul>
  </body>
</html>
