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
    <table>
      <tr>
        <th>
          NOMBRE
        </th>
      </tr>
      <tr>
        <?php
        for ($i=0; $i < $cantidad ; $i++) {
          $nueva = ${"granjero".($i+1)} ;?>
          <tr>
          <td><a href="<?php echo site_url("Granjero/listar_detalle/").$nueva->id?>"><?= $nueva->nombre?></a></td>
          </tr>
        <?php  } ?>
    </table>
  </body>
</html>
