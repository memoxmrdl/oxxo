<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VALIDADOR DE EJECUCION DE FAST FOOD</title>
<style>
body {
	margin: 0;
	font-family: sans-serif;
}

.cell_red {
	background-color: red;
	font-family: sans-serif;
	color: white;
	font-weight: bold;
	text-align: center;
}

.cell_gris {
	background-color: #CCC;
	font-family: sans-serif;
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
	font-family: sans-serif;
	color: white;
	font-weight: bolder;
	font-size: 12px;
	text-align: center;
}
</style>
</head>
<body>	
<table width="800" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="492" class="cell_red">VALIDOR DE EJECUCION DE FAST FOOD</td>
    <td width="302" rowspan="2"><img src="oxxo.jpg" width="302" height="171" /></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellpadding="2" cellspacing="0">
      <tr>
        <td width="40%" class="cell_gris">Fecha:</td>
        <td width="60%" class="cell_yellowd_main"><input name="textfield2" type="text" id="textfield2" size="25" maxlength="24" /></td>
      </tr>
      <tr>
        <td class="cell_gris">Tienda:</td>
        <td class="cell_yellowd_main"><select name="select" id="select">
        </select></td>
      </tr>
      <tr>
        <td class="cell_gris">Responsable de validar la ejecucion:</td>
        <td class="cell_yellowd_main"><input name="textfield" type="text" id="textfield" size="50" /></td>
      </tr>
      <tr>
        <td class="cell_gris">Asesor de tienda</td>
        <td class="cell_yellowd_main"><select name="select2" id="select2">
        </select></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td rowspan="3"><table width="100%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" class="cell_red_mini">Validacion de ejecucion</td>
        </tr>
      <tr>
        <td class="cell_red_mini">MATUTINO</td>
        <td class="cell_red_mini">VESPERTINO</td>
        <td class="cell_red_mini">NOCTURNO</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="18">&nbsp;</td>
  </tr>
</table>
<table width="800" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="163" class="cell_red_mini">AMERICANO</td>
    <td width="163" class="cell_red_mini">FRESCURA</td>
    <td width="163" class="cell_gris">Cafe dentro de sus 4 horas de frescura</td>
    <td width="92" class="cell_yellowd">Si / No</td>
    <td width="108" class="cell_yellowd">Si / No</td>
    <td width="97" class="cell_yellowd">Si / No</td>
  </tr>
  <tr>
    <td height="192" class="cell_red_mini">Insumos</td>
    <td class="cell_red_mini">Exhibicion</td>
    <td colspan="4" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0">
    <td width="162" class="cell_gris">Vasos (cañonera llena)</td>
    <td width="92" class="cell_yellowd"><select name="select3" id="select3">
      <option value="none">--</option>
      <option value="true">Si</option>
      <option value="false">No</option>
    </select></td>
    <td width="122" class="cell_yellowd"><select name="select4" id="select4">
      <option value="none">--</option>
      <option value="true">Si</option>
      <option value="false">No</option>
    </select></td>
    <td width="80" class="cell_yellowd"><select name="select5" id="select5">
      <option value="none">--</option>
      <option value="true">Si</option>
      <option value="false">No</option>
    </select></td>
    <tr>
      <td class="cell_gris">Tapas (sobresale nivel)</td>
      <td class="cell_yellowd"><select name="select6" id="select6">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
      <td class="cell_yellowd"><select name="select7" id="select7">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
      <td class="cell_yellowd"><select name="select8" id="select8">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
    <tr>
      <td class="cell_gris">Azúcar en sobre /Granillo (contenedor lleno) </td>
      <td class="cell_yellowd"><select name="select9" id="select9">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
      <td class="cell_yellowd"><select name="select10" id="select10">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
      <td class="cell_yellowd"><select name="select11" id="select11">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
    <tr>
      <td class="cell_gris">SPLENDA (contenedor lleno)</td>
      <td class="cell_yellowd"><select name="select12" id="select12">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
      <td class="cell_yellowd"><select name="select13" id="select13">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
      <td class="cell_yellowd"><select name="select14" id="select14">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
    <tr>
      <td class="cell_gris">Cremeros Líquidos (contenedor lleno)</td>
      <td class="cell_yellowd"><select name="select15" id="select15">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
      <td class="cell_yellowd"><select name="select16" id="select16">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
      <td class="cell_yellowd"><select name="select17" id="select17">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
    <tr>
      <td class="cell_gris">Servilletas  (contenedor lleno)</td>
      <td class="cell_yellowd"><select name="select18" id="select18">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
      <td class="cell_yellowd"><select name="select19" id="select19">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
      <td class="cell_yellowd"><select name="select20" id="select20">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
    <tr>
      <td class="cell_gris">Agitadores(50%)/Popote Cuchara (50%)</td>
      <td class="cell_yellowd"><select name="select21" id="select21">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
      <td class="cell_yellowd"><select name="select22" id="select22">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
      <td class="cell_yellowd"><select name="select23" id="select23">
        <option value="none">--</option>
        <option value="true">Si</option>
        <option value="false">No</option>
      </select></td>
    </table></td>
  </tr>
  <tr>
    <td height="114" class="cell_red_mini">Frappe</td>
    <td class="cell_red_mini">Exhibición y Limpieza</td>
    <td colspan="4" rowspan="2" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="162" class="cell_gris">Exhibición de Café y Crema Frappe (MINIMO 150 ONZAS)</td>
        <td width="92" class="cell_yellowd"><select name="select24" id="select24">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td width="122" class="cell_yellowd"><select name="select24" id="select25">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td width="80" class="cell_yellowd"><select name="select24" id="select26">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td class="cell_gris">Limpieza tapas de contenedor</td>
        <td class="cell_yellowd"><select name="select24" id="select27">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select24" id="select28">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select24" id="select29">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td class="cell_gris">Limpieza de contenedor</td>
        <td class="cell_yellowd"><select name="select24" id="select30">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select24" id="select31">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select24" id="select32">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td class="cell_gris">Limpieza de charola rejilla</td>
        <td class="cell_yellowd"><select name="select24" id="select33">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select24" id="select34">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select24" id="select35">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td class="cell_gris">Filtro nuevo en el Porta Filtro</td>
        <td class="cell_yellowd"><select name="select24" id="select36">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select24" id="select37">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select24" id="select38">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td class="cell_gris">Limpieza de Termos en Exhibición</td>
        <td class="cell_yellowd"><select name="select24" id="select39">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select24" id="select40">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select24" id="select41">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td class="cell_gris">Limpieza Área de Barra de Café</td>
        <td class="cell_yellowd"><select name="select24" id="select42">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select24" id="select43">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select24" id="select44">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td class="cell_gris">Limpieza de orificio salida de Café</td>
        <td class="cell_yellowd"><select name="select25" id="select45">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select26" id="select46">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select27" id="select47">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="84" class="cell_red_mini">Puntos Críticos</td>
    <td class="cell_red_mini">Limpieza</td>
  </tr>
  <tr>
    <td height="84" colspan="6"><table width="100%" border="1" cellpadding="0" cellspacing="0">
      <col width="316" />
      <col width="256" />
      <col width="320" />
      <col width="103" span="3" />
      <tr>
        <td width="147" rowspan="10" class="cell_red_mini">Indicadores de Enfoque</td>
        <td width="98" rowspan="5" class="cell_red_mini">Roller</td>
        <td width="244" class="cell_gris"> 8 Salchichas (2 c/sabor)</td>
        <td width="91" class="cell_yellowd"><select name="select28" id="select48">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td width="122" class="cell_yellowd"><select name="select29" id="select49">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td width="80" class="cell_yellowd"><select name="select30" id="select50">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="244" class="cell_gris">8 panes (en bolsa transparente)</td>
        <td class="cell_yellowd"><select name="select31" id="select51">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select32" id="select52">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select33" id="select53">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="244" class="cell_gris">Caducidad Salchicha Roller (no obscuras y sin perdida de    volumen)</td>
        <td class="cell_yellowd"><select name="select34" id="select54">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select35" id="select55">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select36" id="select56">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="244" class="cell_gris">Condiciones Pan Hot Dog (no humedo ni de color obscuro)</td>
        <td class="cell_yellowd"><select name="select37" id="select57">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select38" id="select58">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select39" id="select59">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="244" class="cell_gris">Rodillos y base (entre rodillos y panera), sin exceso de grasa.</td>
        <td class="cell_yellowd"><select name="select40" id="select60">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select41" id="select61">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select42" id="select62">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td class="cell_red_mini">Quesera</td>
        <td width="244" class="cell_gris">Limpieza de    Quesera (interior y exterior)</td>
        <td class="cell_yellowd"><select name="select43" id="select63">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select44" id="select64">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select45" id="select65">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td class="cell_red_mini">Panera</td>
        <td width="244" class="cell_gris">Limpieza de    Panera (sin polvo ni residuos)</td>
        <td class="cell_yellowd"><select name="select46" id="select66">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select47" id="select67">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select48" id="select68">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="98" rowspan="3" class="cell_red_mini">Refrigerador  Abierto</td>
        <td width="244" class="cell_gris">Frenteo de    Productos al filo de la charola</td>
        <td class="cell_yellowd"><select name="select49" id="select69">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select50" id="select70">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select51" id="select71">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="244" class="cell_gris">Limpieza de Koxka ( sin insectos en rejilla)</td>
        <td class="cell_yellowd"><select name="select52" id="select72">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select53" id="select73">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select54" id="select74">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="244" class="cell_gris">Caducidad productos Refrigerador abierto (verificar 5 articulos)</td>
        <td class="cell_yellowd"><select name="select55" id="select75">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select56" id="select76">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select57" id="select77">
          <option value="none">--</option>
          <option value="true">Si</option>
          <option value="false">No</option>
        </select></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="84" colspan="6">&nbsp;</td>
  </tr>
</table>
</body>
</html>