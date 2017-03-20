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
          NOMBRE FINCA
        </th>
      </tr>
      <?php 
      foreach ($total as $finca) { ?>
      <tr>
      <td><center><?= $finca->nombre?></center></td>
      </tr>
     <?php  } ?>
    </table>
  </body>
</html>
