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
    <li>Listar Fincas</li>
    <li>Granjero con mas vacas y gallinas</li>
    <li>Fincas con mas de 3 gallinas y menos de 5 vacas</li>
    </ul>
  </body>
</html>
