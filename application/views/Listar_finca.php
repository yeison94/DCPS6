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
        <th>
          VALOR PROPIEDAD
        </th>
        <th>
          CANTIDAD VACAS
        </th>
        <th>
          CANTIDAD GALLINAS
        </th>
      </tr>
      <tr>
      <td><center><?= $finca[0]->nombre?></center></td>
      <td><center><?= $finca[0]->valor_propiedad?></center></td>
      <td><center><?= $finca[0]->cantidad_vacas?></center></td>
      <td><center><?= $finca[0]->cantidad_gallinas?></center></td>
      </tr>
    </table>
  </body>
</html>
