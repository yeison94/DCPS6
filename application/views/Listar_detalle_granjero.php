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
						ID
					</th>
					<th>
						NOMBRE
					</th>
					<th>
						SEXO
					</th>
					<th>
						EDAD
					</th>
                    <th>
						FINCAS
					</th>
			 </tr>
			 <tr>
			 <td><center><?= $granjero->id?></center></td>
             <td><center><?= $granjero->nombre?></center></td>
             <td><center><?= $granjero->sexo?></center></td>
             <td><center><?= $granjero->edad?></center></td>
			 <td>
			 <table>
				 <tr>
				 <th>id</th>
				 <th>nombre</th>
                 <th>valor propiedad</th>
                 <th>cantidad vacas</th>
                 <th>cantidad gallinas</th>
				 </tr>
				 <tr><td>
                 <?php 
				 foreach ($fincas as $finca) {?>
                 <tr>
                 <td><center><?=$finca->id?></center></td>
                 <td><center><?=$finca->nombre?></center></td>
                 <td><center><?=$finca->valor_propiedad?></center></td>
                 <td><center><?=$finca->cantidad_vacas?></center></td>
                 <td><center><?=$finca->cantidad_gallinas?></center></td>
                 </tr>
				 <?php } ?>
                 </td></tr>
			 </table>
			 </td>
	</table>
  </body>
</html>
