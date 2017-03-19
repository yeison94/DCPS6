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
          ID DUEÑO
        </th>
        <th>
          NOMBRE FINCA
        </th>
      </tr>
      <?php 
      foreach ($fincas as $finca) { ?>
      <tr>
      <td><center><?= $finca[0]?></center></td>
      <td><center><?= $finca[1]->nombre?></center></td>
      </tr>
     <?php  } ?>
    </table>
  </body>
</html>
