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
         TOTAL VACAS
        </th>
        <th>
         ID GRANJERO
        </th>
        <th>
         TOTAL GALLINAS
        </th>
        <th>
          ID GRANJERO
        </th>
      </tr>
      <tr>
      <td><?= $total[0]->total?></td>
      <td><?= $total[0]->id_granjero?></td>
      <td><?= $total[1]->total?></td>
      <td><?= $total[1]->id_granjero?></td>
      </tr>
    </table>
  </body>
</html>
