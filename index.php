<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="lib/css/jquery-ui.css" rel="stylesheet" type="text/css" />
  <script src="lib/js/jquery-1.9.1.js"></script>
  <script src="lib/js/jquery-ui.js"></script>
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

   .border {
    border-style:solid;
    border-width:1px;	
  }
</style>
<script>
  $(function() {

   var data = {
     "Diego Moron De La Torre": { 
      0:"El Cobano CLA 50AQO",
      1:"Maria Isabel CLA 50HAS",
      2:"Zapotiltic Centro CLA 50HSU",
      3:"Paredon CLA 50JKB",
      4:"Camino Real CLA 50MIW",
      5:"Escobedo 50MSR",
      6:"El Trapiche CLA 50QZW",
      7:"Caseta San Marcos CLA 50SMC",
      8:"Tuxpan Centro CLA 50WEI"
    },
    "Jose de Jesus Quiroz Espinoza": {
      0:"Termoelectrica CLA 50BLJ",
      1:"La Central CLA 50CTF",
      2:"Contenedores CLA 50JKD",
      3:"Las Hadas CLA 50LHW",
      4:"Arcos Malecon CLA 50LJH",
      5:"La Iguana CLA 50LRJ",
      6:"Colonial CLA 50QQX",
      7:"Recinto CLA 50RCY",
      8:"El Tajo CLA 50WAH",
      9:"Mexico CLA 50YPZ",
      10:"Pez Vela CLA 50YYD",
      11:"Tapeixtles CLA 50ZVN"

    },
    "Fernando Damian salazar Lopez": {
      0:"Jalipa CLA 50BBW",
      1:"Nuevo Salahua CLA 50BXB",
      2:"Cruz Roja 50BXF",
      3:"Crucero CLA 50CUW",
      4:"Flamingos CLA 50GFJ",
      5:"Halcones CLA 50HLC",
      6:"La Joya CLA 50JAY",
      7:"Complejo CLA 50KLQ",
      8:"Villa del Mar CLA 50LKQ",
      9:"Pacifico CLA 50PCQ",
      10:"Primaveras CLA 50PWJ",
      11:"Almendros CLA 50XVU"
    },
    "Francisco Daniel Vargas Cuevas": {
      0:"Valle del Sol CLA 50BHD",
      1:"Sayula Centro CLA 50DDC",
      2:"Calzada Madero CLA 50FKW",
      3:"Colon CLA 50FXU",
      4:"Jacarandas CLA 50LKL",
      5:"Serafin Vazquez CLA 50MSM",
      6:"CasetaCdGuzmanPteCLA 50PJY",
      7:"Los Portales CLA 50QZK",
      8:"Caseta Cd. Guzman CLA 50SMD",
      9:"Zapotlan CLA 50WUZ",
      10:"Reforma 50YMO",
      11:"Campus USU CLA 50YMP"
    },
    "Edgar Joel De La Peña Rodriguez": {
      0:"Cuatro Caminos 50AFJ",
      1:"Autlan Centro CLA 50BBQ",
      2:"El Grullo Centro CLA 50DDF",
      3:"Azucarera CLA 50FXH",
      4:"Santana CLA 50FYP",
      5:"El Violin CLA 50IYV",
      6:"Donia Rosita CLA 50NXA",
      7:"Puerta de la Costa CLA 50USZ",
      8:"Alameda CLA 50WPG",
      9:"Circunvalacion CLA 50WPH",
      10:"La Grana CLA 50ZNJ",
      11:"Union de Tula CLA 50ZWE"
    },
    "Efren Adhemir Calderas Gomez": {
      0:"S.E.P. CLA 50BLF",
      1:"Libertad CLA 50BNE",
      2:"Centro Colima CLA 50CTG",
      3:"Milenio CLA 50EBM",
      4:"El Castillo CLA 50ELK",
      5:"Diaz Miron CLA 50FGB",
      6:"SAN FERNANDO CLA 50FOS",
      7:"Medellin CLA 50HVW",
      8:"Agencias CLA 50JGC",
      9:"Purisima CLA 50KAE",
      10:"Calzada CLA 50OKL",
      11:"San Francisco CLA 50QWZ",
      12:"Vivero CLA 50QZX"
    },
    "Tania Rosario Santana Rodriguez": {
      0:"Bugambilias CLA 50BGX",
      1:"Campestre CLA 50QZQ",
      2:"Comala CLA 50QWW",
      3:"Constitucion CLA 50WHM",
      4:"Del Rio CLA 50DYR",
      5:"El Charro CLA 50QKZ",
      6:"Esmeralda CLA 50NKD",
      7:"Ninos Heroes CLA 50NHZ",
      8:"Santa Barbara CLA 50HBA",
      9:"Senderos CLA 50WAG",
      10:"S.E.P. CLA 50BLF",
      11:"Sevilla del Rio CLA 50DJK",
      12:"Villa Rica CLA 50QKQ"
    },
    "Paul Medina Peña": {
      0:"Melaque Centro CLA 50IYQ",
      1:"Casimiro Centro CLA 50JSB",
      2:"Club Santiago CLA 50JUF",
      3:"Cihuatlan CLA 50KCJ",
      4:"Melaque CLA 50MQX",
      5:"Melaque Playa 50MSL",
      6:"Aquiles Serdan 50MSQ",
      7:"Olas Altas CLA 50OFJ",
      8:"Santiago CLA 50STW",
      9:"Barra Malecon CLA 50VUK",
      10:"Barra Central CLA 50VUP",
      11:"Santa Cruz CLA 50ZQJ",
      12:"El Aguacate CLA 50ZRJ"
    },
    "Raul Mendez Alcaraz": {
      0:"Fresnito CLA 50BJJ",
      1:"Volcanes CLA 50CIG",
      2:"Morelos CLA 50IDQ",
      3:"El ingenio CLA 50IXF",
      4:"Mazamitla Crucero CLA 50JXR",
      5:"Tamazula Centro CLA 50LJE",
      6:"El Prado CLA 50POY",
      7:"Libramiento CLA 50QDI",
      8:"Mazamitla Galeana CLA 50TGE",
      9:"Villanueva CLA 50WUD",
      10:"Juarez 50YMM"	
    },
    "Sergio Morales Zamora": {
      0:"Tecoman Centro CLA50AAX",
      1:"Caxitlan CLA 50CGX",
      2:"Del Real CLA 50DRQ",				
      3:"Fatima CLA 50FTM",
      4:"Cruz de Tecoman CLA 50GWM",
      5:"La Herradura CLA 50HAU",
      6:"Golondrinas CLA 50JHL",
      7:"Torres CLA 50KFX",
      8:"La Estacion CLA 50LSN",
      9:"Progreso 50RWT",
      10:"Armeria Centro CLA 50WQO"
    },
    "Tania Rosario Santana Rodriguez": {
      0:"Bugambilias CLA 50BGX",
      1:"Sevilla del Rio CLA 50DJK",
      2:"Del Rio CLA 50DYR",
      3:"Santa Barbara CLA 50HBA",
      4:"Ninos Heroes CLA 50NHZ",
      5:"Esmeralda CLA 50NKD",
      6:"Palenque 50PHE",
      7:"Villa Rica CLA 50QKQ",
      8:"El Charro CLA 50QKZ",
      9:"Comala CLA 50QWW",
      10:"Campestre CLA 50QZQ",
      11:"Senderos CLA 50WAG",
      12:"Constitucion CLA 50WHM"
    }
  };	  
  
  $("#fecha").datepicker({minDate: -0});
  $("#fecha").datepicker("option", "dateFormat", "dd/mm/yy");
  
  $('#tienda').append('<option value="">--------------------------</option>');
  $.each(data, function(i, v){
    $.each(v, function(x, y){
     $('#tienda').append('<option value="'+y+'">'+y+'</option>');
   });
  });
  
  $('#asesor').append('<option value="">--------------------------</option>');
  $.each(data, function(i, v){
    $('#asesor').append('<option value="'+i+'">'+i+'</option>');
  });
  
  $("#tienda").change(function(){
    var option = $(this).val();
    $.each(data, function(i, v){
     $.each(v, function(x, y){				
      if(y==option) { 
       console.log(option+"--->"+i+"-->"+y);
       $('#asesor option[value="'+i+'"]').attr('selected','selected'); 
     }
   });
   });
  })
  
});
</script>
</head>
<body>
  <table width="800" border="0" cellpadding="0" cellspacing="0">
    <form method="post" action="pdf/create.php">
      <tr>
        <td width="498" class="cell_red">VALIDOR DE EJECUCION DE FAST FOOD</td>
        <td width="302" rowspan="2" align="right"><img src="assets/oxxo.jpg" width="302" height="171" /></td>
      </tr>
      <tr>
        <td><table width="100%" border="1" cellpadding="2" cellspacing="0">
          <tr>
            <td width="32%" class="cell_gris">Fecha:</td>
            <td width="68%" class="cell_yellowd_main"><input name="fecha" type="text" id="fecha" size="25" maxlength="24" /></td>
          </tr>
          <tr>
            <td class="cell_gris">Tienda:</td>
            <td class="cell_yellowd_main"><select name="tienda" id="tienda">
            </select></td>
          </tr>
          <tr>
            <td class="cell_gris">Responsable de validar la ejecucion:</td>
            <td class="cell_yellowd_main"><input name="responsable" type="text" id="responsable" size="55" /></td>
          </tr>
          <tr>
            <td class="cell_gris">Asesor de tienda</td>
            <td class="cell_yellowd_main"><select name="asesor" id="asesor">
            </select></td>
          </tr>
        </table></td>
      </tr>
    </table>
    <table width="800" border="1" cellpadding="0" cellspacing="0">
      <col width="316" />
      <col width="256" />
      <col width="320" />
      <col width="103" span="3" />
      <tr>
        <td colspan="3" rowspan="2">&nbsp;</td>
        <td colspan="3" class="cell_red_mini">Validación de Ejecución:</td>
      </tr>
      <tr>
        <td width="111" class="cell_red_mini">MATUTINO</td>
        <td width="110" class="cell_red_mini">VESPERTINO</td>
        <td width="111" class="cell_red_mini">NOCTURNO</td>
      </tr>
      <tr>
        <td class="cell_red_mini">AMERICANO</td>
        <td class="cell_red_mini">FRESCURA</td>
        <td width="212" class="cell_gris">Café dentro de    sus 4 horas de frescura</td>
        <td class="cell_yellowd"><select name="select96" id="select96">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select97" id="select97">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select98" id="select98">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="99" rowspan="7" class="cell_red_mini">Insumos</td>
        <td rowspan="7" class="cell_red_mini">Exhibición</td>
        <td width="212" class="cell_gris">Vasos (cañonera llena)</td>
        <td class="cell_yellowd"><select name="select" id="select">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select2" id="select2">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select3" id="select3">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Tapas    (sobresale nivel)</td>
        <td class="cell_yellowd"><select name="select4" id="select4">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select5" id="select5">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select6" id="select6">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Azúcar    en sobre /Granillo (contenedor lleno) </td>
        <td class="cell_yellowd"><select name="select7" id="select7">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select8" id="select8">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select9" id="select9">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">SPLENDA    (contenedor lleno)</td>
        <td class="cell_yellowd"><select name="select10" id="select10">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select11" id="select11">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select12" id="select12">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Cremeros    Líquidos (contenedor lleno)</td>
        <td class="cell_yellowd"><select name="select13" id="select13">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select14" id="select14">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select15" id="select15">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Servilletas  (contenedor lleno)</td>
        <td class="cell_yellowd"><select name="select16" id="select16">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select17" id="select17">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select18" id="select18">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Agitadores(50%)/Popote    Cuchara (50%)</td>
        <td class="cell_yellowd"><select name="select19" id="select19">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select20" id="select20">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select21" id="select21">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="99" rowspan="4" class="cell_red_mini">Frappe</td>
        <td width="155" rowspan="4" class="cell_red_mini">Exhibición y Limpieza</td>
        <td width="212" class="cell_gris">Exhibición de Café y Crema    Frappe (MINIMO 150 ONZAS)</td>
        <td class="cell_yellowd"><select name="select22" id="select22">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select23" id="select23">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select24" id="select24">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Limpieza    tapas de contenedor</td>
        <td class="cell_yellowd"><select name="select25" id="select25">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select26" id="select26">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select27" id="select27">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Limpieza    de contenedor</td>
        <td class="cell_yellowd"><select name="select28" id="select28">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select29" id="select29">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select30" id="select30">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Limpieza    de charola rejilla</td>
        <td class="cell_yellowd"><select name="select31" id="select31">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select32" id="select32">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select33" id="select33">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="99" rowspan="4" class="cell_red_mini">Puntos Críticos</td>
        <td rowspan="4" class="cell_red_mini">Limpieza</td>
        <td width="212" class="cell_gris">Filtro nuevo en    el Porta Filtro</td>
        <td class="cell_yellowd"><select name="select34" id="select34">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select35" id="select35">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select36" id="select36">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Limpieza    de Termos en Exhibición</td>
        <td class="cell_yellowd"><select name="select37" id="select37">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select38" id="select38">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select39" id="select39">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Limpieza    Área de Barra de Café</td>
        <td class="cell_yellowd"><select name="select40" id="select40">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select41" id="select41">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select42" id="select42">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Limpieza    de orificio salida de Café</td>
        <td class="cell_yellowd"><select name="select43" id="select43">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select44" id="select44">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select45" id="select45">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="99" rowspan="10" class="cell_red_mini">Indicadores de Enfoque</td>
        <td rowspan="5" class="cell_red_mini">Roller</td>
        <td width="212" class="cell_gris"> 8 Salchichas (2 c/sabor)</td>
        <td class="cell_yellowd"><select name="select46" id="select46">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select47" id="select47">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select48" id="select48">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">8 panes (en bolsa transparente)</td>
        <td class="cell_yellowd"><select name="select49" id="select49">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select50" id="select50">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select51" id="select51">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Caducidad Salchicha Roller (no obscuras y sin perdida de    volumen)</td>
        <td class="cell_yellowd"><select name="select52" id="select52">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select53" id="select53">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select54" id="select54">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Condiciones Pan Hot Dog (no humedo ni de color obscuro)</td>
        <td class="cell_yellowd"><select name="select55" id="select55">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select56" id="select56">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select57" id="select57">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Rodillos y base (entre rodillos y panera), sin exceso de grasa.</td>
        <td class="cell_yellowd"><select name="select58" id="select58">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select59" id="select59">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select60" id="select60">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td class="cell_red_mini">Quesera</td>
        <td width="212" class="cell_gris">Limpieza de    Quesera (interior y exterior)</td>
        <td class="cell_yellowd"><select name="select61" id="select61">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select62" id="select62">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select63" id="select63">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td class="cell_red_mini">Panera</td>
        <td width="212" class="cell_gris">Limpieza de    Panera (sin polvo ni residuos)</td>
        <td class="cell_yellowd"><select name="select64" id="select64">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select65" id="select65">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select66" id="select66">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="155" rowspan="3" class="cell_red_mini">Refrigerador  Abierto</td>
        <td width="212" class="cell_gris">Frenteo de    Productos al filo de la charola</td>
        <td class="cell_yellowd"><select name="select67" id="select67">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select68" id="select68">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select69" id="select69">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Limpieza de Koxka ( sin insectos en rejilla)</td>
        <td class="cell_yellowd"><select name="select70" id="select70">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select71" id="select71">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select72" id="select72">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Caducidad productos Refrigerador abierto (verificar 5 articulos)</td>
        <td class="cell_yellowd"><select name="select73" id="select73">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select74" id="select74">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select75" id="select75">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="99" rowspan="5" class="cell_red_mini">Puntos Críticos de Alimentos</td>
        <td class="cell_red_mini">Roller</td>
        <td width="212" class="cell_gris"> Temperatura de Roller (entre el 3 y el 4)</td>
        <td class="cell_yellowd"><select name="select76" id="select76">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select77" id="select77">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select78" id="select78">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td class="cell_red_mini">Quesera</td>
        <td width="212" class="cell_gris">Exhibición de    Queso (mínimo media bolsa) </td>
        <td class="cell_yellowd"><select name="select79" id="select79">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select80" id="select80">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select81" id="select81">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="155" rowspan="3" class="cell_red_mini">Condimentero  / Portainsumos</td>
        <td width="212" class="cell_gris"> Exhibición Condimentero (mínimo medio    inserto con insumos frescos)</td>
        <td class="cell_yellowd"><select name="select82" id="select82">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select83" id="select83">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select84" id="select84">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris"> Operación Condimentero    (sin residuos de verdura en el exterior)</td>
        <td class="cell_yellowd"><select name="select85" id="select85">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select86" id="select86">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select87" id="select87">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td width="212" class="cell_gris">Hielo en condimentero (No agua)</td>
        <td class="cell_yellowd"><select name="select88" id="select88">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select89" id="select89">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td class="cell_yellowd"><select name="select90" id="select90">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>&nbsp;</td>
      </tr>
      <tr class="cell_red">
        <td colspan="2">Satatus de    Funcionamiento de Equipos de Fast Food:</td>
        <td colspan="4">Observaciones:</td>
      </tr>
      <tr>
        <td class="cell_gris">Maquinas de café</td>
        <td class="cell_yellowd"><select name="select91" id="select91">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td colspan="4" class="cell_yellowd_main"><span class="cell_yellowd_main">
          <input name="textfield3" type="text" id="textfield3" size="80" />
        </span></td>
      </tr>
      <tr>
        <td class="cell_gris">Roller</td>
        <td class="cell_yellowd"><select name="select92" id="select92">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td colspan="4" class="cell_yellowd_main">
          <input name="textfield4" type="text" id="textfield4" size="80" />
        </td>
      </tr>
      <tr>
        <td class="cell_gris">Koxka</td>
        <td class="cell_yellowd"><select name="select93" id="select93">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td colspan="4" class="cell_yellowd_main"><span class="cell_yellowd_main">
          <input name="textfield5" type="text" id="textfield5" size="80" />
        </span></td>
      </tr>
      <tr>
        <td class="cell_gris">Quesera</td>
        <td class="cell_yellowd"><select name="select94" id="select94">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td colspan="4" class="cell_yellowd_main"><span class="cell_yellowd_main">
          <input name="textfield6" type="text" id="textfield6" size="80" />
        </span></td>
      </tr>
      <tr>
        <td class="cell_gris">Condimentero</td>
        <td class="cell_yellowd"><select name="select95" id="select95">
          <option value="---">--</option>
          <option value="SI">Si</option>
          <option value="NO">No</option>
        </select></td>
        <td colspan="4" class="cell_yellowd_main"><span class="cell_yellowd_main">
          <input name="textfield7" type="text" id="textfield7" size="80" />
        </span></td>
      </tr>
      <tr>
        <td colspan="6">&nbsp;</td>
      </tr>
      <tr>
        <td width="99" class="cell_gris">Comentarios Respecto a Necesisades requeridas:</td>
        <td colspan="5" align="left"><textarea name="textarea" id="textarea" cols="70" rows="5"></textarea></td>
      </tr>
      <tr>
        <td height="80">&nbsp;</td>
        <td colspan="5" align="right">
          <input type="submit" style="font-size: 1.2em;" name="create" value="ENVIAR VALIDACION" />
        </td>
      </tr>
    </form>
  </table>
</body>
</html>
