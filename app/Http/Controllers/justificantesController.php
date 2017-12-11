<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class justificantesController extends Controller
{
	public function index()
		{
;

			return 'hola';
			// $query2 = laravel__justificantes::all();
			// $ejecutar2 = $conexion->query($query2);




			// $query2 = "SELECT * FROM alumnos";
			// $ejecutar2 = $conexion->query($query2);
			// foreach ($ejecutar2 as $k => $v)
			// {
			// 	$matriculaBD=$v['matricula'];

			// 	if ($matriculaBD == $matricula)
			// 	{
			// 		$con++;
			// 	}
			// }

			// if ($con<3)
			// 	{
			// 	if (isset($guardar))
			// 			{
			// 				$sql="INSERT INTO alumnos VALUES ('$matricula', '$carrera', '$razon', '$fecha', '$hora1', '$hora2')";
			// 				if ($ejecutar=$conexion->query($sql))
			// 				{
			// 					echo "Se ha guardado correctamente";
			// 				}
			// 				else
			// 				{
			// 					echo "No se ha guardado";
			// 				}
			// 			}
			// 	}	
			// 	else
			// 	{
			// 		echo "A esta persona se le termino el limite de justificantes";
			// 	}




		}
}
