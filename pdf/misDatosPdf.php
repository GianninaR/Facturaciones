<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Factura</title>
    <link rel="stylesheet" href="../factura.css">
	<?php include "../core/modules/index/model/PersonData.php"; ?>
	<?php include "../core/modules/index/model/SellData.php"; ?>
	<?php include "../core/modules/index/model/OperationData.php"; ?>
	<?php include "../core/modules/index/model/PostData.php"; ?>
</head>
<body>
<?php $ab=$_GET["id"] ?>
<?php if(isset($ab) && ($ab)!=""): ?>
<?php
$sell = SellData::getById($ab);
$operations = OperationData::getAllProductsBySellId($_GET["id"]);
$total = 0;
?>
<div id="page_pdf">
	<table id="factura_head">
		<tr>
			<td class="logo_factura">
				<div>
					<img src="../img/logo.png">
				</div>
			</td>
			<td class="info_empresa">
				<div>
					<span class="h2">MUNDOVET</span>
					<p>Shopping El Portal, Asunción</p>
					<p>Telefono: (021) 328 9330</p>
					<p>Email: mundovet@gmail.com</p>
				</div>
			</td>
			<td class="info_factura">
				<div class="round">
					<span class="h3">Factura</span>
					<p>No. Timbrado: <strong>13614139</strong></p>
					<p>Inicio Vigencia: 02/09/2019</p>
					<p>Fin Vigencia: 02/09/2020</p>
				</div>
			</td>
		</tr>
	</table>
	<table id="factura_cliente">
	<?php if($sell->person_id!=""):
$client = $sell->getPerson();
?>
		<tr>
			<td class="info_cliente">
				<div class="round">
					<span class="h3">Cliente</span>
					<table class="datos_cliente">
						<tr>
							<td><label>FECHA:</label><p>54895468</p></td>
							<td><label>RUC:</label> <p><?php echo $client->ruc;?></p></td>
						</tr>
						<tr>
							<td><label>NOMBRE:</label> <p>Angel Arana Cabrera</p></td>
							<td><label>DIRECCION:</label> <p>Calzada Buena Vista</p></td>
						</tr>
					</table>
				</div>
			</td>

		</tr>
		<?php endif; ?>
	</table>
	
	<table id="factura_detalle">
			<thead>
				<tr>
					<th width="50px">Cant.</th>
					<th class="textleft">Descripción</th>
					<th class="textright" width="150px">Precio Unitario.</th>
					<th class="textright" width="150px"> Precio Total</th>
				</tr>
			</thead>
			<tbody id="detalle_productos">
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td class="textright">516.67</td>
					<td class="textright">516.67</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td class="textright">516.67</td>
					<td class="textright">516.67</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td class="textright">516.67</td>
					<td class="textright">516.67</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td class="textright">516.67</td>
					<td class="textright">516.67</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td class="textright">516.67</td>
					<td class="textright">516.67</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td class="textright">516.67</td>
					<td class="textright">516.67</td>
				</tr>
			</tbody>
			<tfoot id="detalle_totales">
				<tr>
					<td colspan="3" class="textright"><span>SUBTOTAL Q.</span></td>
					<td class="textright"><span>516.67</span></td>
				</tr>
				<tr>
					<td colspan="3" class="textright"><span>IVA (10%)</span></td>
					<td class="textright"><span>516.67</span></td>
				</tr>
				<tr>
					<td colspan="3" class="textright"><span>TOTAL Q.</span></td>
					<td class="textright"><span>516.67</span></td>
				</tr>
		</tfoot>
	</table>
	<div>
		<p class="nota">Si usted tiene preguntas sobre esta factura, <br>pongase en contacto con nombre, telefono y email</p>
		<h4 class="label_gracias">¡Gracias por su compra!</h4>
	</div>

</div>
<?php endif; ?>
</body>
</html>