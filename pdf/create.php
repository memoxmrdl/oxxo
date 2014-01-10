<?php
require_once('../lib/html2pdf_v4.03/html2pdf.class.php');
require_once('modulo_tiendas.php');
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VALIDADOR DE EJECUCION DE FAST FOOD</title>
<style>
body {
	margin: 0;
}

.cell_red {
	background-color: red;
	color: white;
	font-weight: bold;
	text-align: center;
}

.cell_gris {
	background-color: #CCC;
	color: black;
	font-weight: bold;
	font-size: 12px;
	text-align: left;
}

.cell_yellowd {
	background-color: #FF6;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
}

.cell_yellowd_main {
	background-color: #FF6;
	font-size: 12px;
	font-weight: bold;
}
.cell_red_mini {
	background-color: red;
	color: white;
	font-weight: bolder;
	font-size: 12px;
	text-align: center;
}
</style>
</head>
<body>
<table width="700" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="440" class="cell_red">VALIDOR DE EJECUCION DE FAST FOOD</td>
    <td width="100" rowspan="2" align="right"><img src="../assets/index2_clip_image002.png" width="301" height="173" /></td>
  </tr>
  <tr>
    <td height="122" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0">
      <tr>
        <td width="32%" class="cell_gris">Fecha:</td>
        <td width="68%" class="cell_yellowd_main"><?= $_POST["fecha"] ?></td>
      </tr>
      <tr>
        <td class="cell_gris">Tienda:</td>
        <td class="cell_yellowd_main"><?= $_POST["tienda"] ?></td>
      </tr>
      <tr>
        <td class="cell_gris">Responsable de validar la ejecucion:</td>
        <td class="cell_yellowd_main"><?= $_POST["responsable"] ?></td>
      </tr>
      <tr>
        <td class="cell_gris">Asesor de tienda</td>
        <td class="cell_yellowd_main"><?= $_POST["asesor"] ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="700" border="1" cellpadding="0" cellspacing="0">
  <col width="100" />
  <col width="100" />
  <col width="265" />
  <col width="80" span="3" />
  <tr>
    <td colspan="3" rowspan="2">&nbsp;</td>
    <td colspan="3" class="cell_red_mini">Validación de Ejecución:</td>
  </tr>
  <tr>
    <td class="cell_red_mini">MATUTINO</td>
    <td class="cell_red_mini">VESPERTINO</td>
    <td class="cell_red_mini">NOCTURNO</td>
  </tr>
  <tr>
    <td class="cell_red_mini">AMERICANO</td>
    <td class="cell_red_mini">FRESCURA</td>
    <td class="cell_gris">Café dentro de    sus 4 horas de frescura</td>
    <td class="cell_yellowd"><?= $_POST["select96"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select97"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select98"] ?></td>
  </tr>
  <tr>
    <td rowspan="7" class="cell_red_mini">Insumos</td>
    <td rowspan="7" class="cell_red_mini">Exhibición</td>
    <td class="cell_gris">Vasos (cañonera llena)</td>
    <td class="cell_yellowd"><?= $_POST["select"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select2"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select3"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Tapas    (sobresale nivel)</td>
    <td class="cell_yellowd"><?= $_POST["select4"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select5"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select6"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Azúcar    en sobre /Granillo (contenedor lleno) </td>
    <td class="cell_yellowd"><?= $_POST["select7"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select8"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select9"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">SPLENDA    (contenedor lleno)</td>
    <td class="cell_yellowd"><?= $_POST["select10"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select11"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select12"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Cremeros    Líquidos (contenedor lleno)</td>
    <td class="cell_yellowd"><?= $_POST["select13"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select14"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select15"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Servilletas  (contenedor lleno)</td>
    <td class="cell_yellowd"><?= $_POST["select16"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select17"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select18"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Agitadores(50%)/Popote    Cuchara (50%)</td>
    <td class="cell_yellowd"><?= $_POST["select19"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select20"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select21"] ?></td>
  </tr>
  <tr>
    <td rowspan="4" class="cell_red_mini">Frappe</td>
    <td rowspan="4" class="cell_red_mini">Exhibición y Limpieza</td>
    <td class="cell_gris">Exhibición de Café y Crema    Frappe (MINIMO 150 ONZAS)</td>
    <td class="cell_yellowd"><?= $_POST["select22"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select23"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select24"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Limpieza    tapas de contenedor</td>
    <td class="cell_yellowd"><?= $_POST["select25"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select26"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select27"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Limpieza    de contenedor</td>
    <td class="cell_yellowd"><?= $_POST["select28"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select29"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select30"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Limpieza    de charola rejilla</td>
    <td class="cell_yellowd"><?= $_POST["select31"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select32"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select33"] ?></td>
  </tr>
  <tr>
    <td rowspan="4" class="cell_red_mini">Puntos Críticos</td>
    <td rowspan="4" class="cell_red_mini">Limpieza</td>
    <td class="cell_gris">Filtro nuevo en    el Porta Filtro</td>
    <td class="cell_yellowd"><?= $_POST["select34"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select35"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select36"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Limpieza    de Termos en Exhibición</td>
    <td class="cell_yellowd"><?= $_POST["select37"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select38"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select39"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Limpieza    Área de Barra de Café</td>
    <td class="cell_yellowd"><?= $_POST["select40"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select41"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select42"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Limpieza    de orificio salida de Café</td>
    <td class="cell_yellowd"><?= $_POST["select43"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select44"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select45"] ?></td>
  </tr>
  <tr>
    <td rowspan="10" class="cell_red_mini">Indicadores de Enfoque</td>
    <td rowspan="5" class="cell_red_mini">Roller</td>
    <td class="cell_gris"> 8 Salchichas (2 c/sabor)</td>
    <td class="cell_yellowd"><?= $_POST["select46"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select47"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select48"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">8 panes (en bolsa transparente)</td>
    <td class="cell_yellowd"><?= $_POST["select49"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select50"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select51"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Caducidad Salchicha Roller (no obscuras y sin perdida de    volumen)</td>
    <td class="cell_yellowd"><?= $_POST["select52"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select53"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select54"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Condiciones Pan Hot Dog (no humedo ni de color obscuro)</td>
    <td class="cell_yellowd"><?= $_POST["select55"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select56"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select57"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Rodillos y base (entre rodillos y panera), sin exceso de grasa.</td>
    <td class="cell_yellowd"><?= $_POST["select58"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select59"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select60"] ?></td>
  </tr>
  <tr>
    <td class="cell_red_mini">Quesera</td>
    <td class="cell_gris">Limpieza de    Quesera (interior y exterior)</td>
    <td class="cell_yellowd"><?= $_POST["select61"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select62"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select63"] ?></td>
  </tr>
  <tr>
    <td class="cell_red_mini">Panera</td>
    <td class="cell_gris">Limpieza de    Panera (sin polvo ni residuos)</td>
    <td class="cell_yellowd"><?= $_POST["select64"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select65"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select66"] ?></td>
  </tr>
  <tr>
    <td rowspan="3" class="cell_red_mini">Refrigerador  Abierto</td>
    <td class="cell_gris">Frenteo de    Productos al filo de la charola</td>
    <td class="cell_yellowd"><?= $_POST["select67"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select68"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select69"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Limpieza de Koxka ( sin insectos en rejilla)</td>
    <td class="cell_yellowd"><?= $_POST["select70"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select71"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select72"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Caducidad productos Refrigerador abierto (verificar 5 articulos)</td>
    <td class="cell_yellowd"><?= $_POST["select73"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select74"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select75"] ?></td>
  </tr>
  <tr>
    <td rowspan="5" class="cell_red_mini">Puntos Críticos de Alimentos</td>
    <td class="cell_red_mini">Roller</td>
    <td class="cell_gris"> Temperatura de Roller (entre el 3 y el 4)</td>
    <td class="cell_yellowd"><?= $_POST["select76"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select77"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select78"] ?></td>
  </tr>
  <tr>
    <td class="cell_red_mini">Quesera</td>
    <td class="cell_gris">Exhibición de    Queso (mínimo media bolsa) </td>
    <td class="cell_yellowd"><?= $_POST["select79"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select80"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select81"] ?></td>
  </tr>
  <tr>
    <td rowspan="3" class="cell_red_mini">Condimentero  / Portainsumos</td>
    <td class="cell_gris"> Exhibición Condimentero (mínimo medio    inserto con insumos frescos)</td>
    <td class="cell_yellowd"><?= $_POST["select82"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select83"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select84"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris"> Operación Condimentero    (sin residuos de verdura en el exterior)</td>
    <td class="cell_yellowd"><?= $_POST["select85"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select86"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select87"] ?></td>
  </tr>
  <tr>
    <td class="cell_gris">Hielo en condimentero (No agua)</td>
    <td class="cell_yellowd"><?= $_POST["select88"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select89"] ?></td>
    <td class="cell_yellowd"><?= $_POST["select90"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="cell_red">
    <td colspan="2">Satatus de    Funcionamiento de Equipos de Fast Food:</td>
    <td colspan="4">Observaciones:</td>
  </tr>
  <tr>
    <td class="cell_gris">Maquinas de café</td>
    <td class="cell_yellowd"><?= $_POST["select91"] ?></td>
    <td colspan="4" align="left" valign="top" class="cell_yellowd_main">
      <?= $_POST["textfield3"] ?>
    </td>
  </tr>
  <tr>
    <td class="cell_gris">Roller</td>
    <td class="cell_yellowd"><?= $_POST["select92"] ?></td>
    <td colspan="4" align="left" valign="top" class="cell_yellowd_main">
      <?= $_POST["textfield4"] ?>
    </td>
  </tr>
  <tr>
    <td class="cell_gris">Koxka</td>
    <td class="cell_yellowd"><?= $_POST["select93"] ?></td>
    <td colspan="4" align="left" valign="top" class="cell_yellowd_main">
      <?= $_POST["textfield5"] ?>
    </td>
  </tr>
  <tr>
    <td class="cell_gris">Quesera</td>
    <td class="cell_yellowd"><?= $_POST["select94"] ?></td>
    <td colspan="4" align="left" valign="top" class="cell_yellowd_main">
      <?= $_POST["textfield6"] ?>
    </td>
  </tr>
  <tr>
    <td class="cell_gris">Condimentero</td>
    <td class="cell_yellowd"><?= $_POST["select95"] ?></td>
    <td colspan="4" align="left" valign="top" class="cell_yellowd_main">
      <?= $_POST["textfield7"] ?>
    </td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td class="cell_gris">Comentarios Respecto a Necesisades requeridas:</td>
    <td colspan="5" align="left" valign="top"><?= $_POST["textarea"] ?></td>
  </tr>
</table>
</body>
</html>
<?php
	$content = ob_get_clean();	
	$computername = get_tienda($_ENV["COMPUTERNAME"]);
	$name = date('dmYHis');
  $name = $computername."_".$name;
	
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content);
        $html2pdf->Output("pdfarchive/$name.pdf", 'F');
		
		header("Location: ../index.php");
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }	
?>