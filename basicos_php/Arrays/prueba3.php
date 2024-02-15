<head>
		<title>CLIENTES</title>
	</head>
	<style>
	table, tr, th, td{border: 1px solid #000000;text-align: center;}
	body{min-height: 400px;}
	h1{padding-top: 50px;}
	</style>
	<body align="center" style="background-image:url('/practicas/fotos/fot2.jpg');background-size:100%;border:3px solid white;">
	<h1 align="center" style="color:white;">CLIENTES</h1>
		<TABLE align="center" style="border:groove 10PX lightgreen">
			<TR>
				<td><b>DNI</b></td>
				<td colspan="2"><b>CLIENTE</b></td>
				<div align="center">
						<?php
							$DNI=array
							(
								"758888888W" => array
									(
										"Nombre"=>"Víctor",
										"Apellidos"=>"García",
										"Teléfono"=>"959471852"
									),
								"777777777A" => array
									(
										"Nombre"=>"Pepe",
										"Apellidos"=>"García",
										"Teléfono"=>"959971852"
									),
								"00000000X" => array
									(
										"Nombre"=>"Nacho",
										"Apellidos"=>"Salas",
										"Teléfono"=>"988998899"
									)
							);
							asort($DNI);
							foreach($DNI as $valordni => $info){	
								echo "<tr>";		
									echo "<td rowspan='4'>".$valordni;
										foreach($info as $key => $valor){				
										echo "<tr>";
												echo "<td>".$key."</td>";
												echo "<td>".$valor."</td>";	
												//echo "$key: $valor\n";
										echo "</tr>";	
								}
									echo "</td>";
								echo "</tr>";
							}
							?>
				</div>
			</TD></TR>
		</TABLE>
	</body>
</html>