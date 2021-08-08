<html>
	<head>
		<title>Resumen de Estimación</title>
		<script src="pdf.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
	</head>
	<body>
	<div class="container_title" style="text-align:center">
	<a><img src="img\tsoft.jpg" style="width:15%; height:9%" ></a> 
	<p></p>
    <div style="text-align:center; width:650px;height:0px; margin-left:auto; margin-right:auto; margin-bottom:1%; border:0px solid #000;font-size:30px; font-family:verdana;font-weight:bold">Resumen de Estimación</div>
    <br>
	</div>
	<div class="container_resumen" style="text-align:left">
			<a><img src="img\resumen.jpg" style="width:10%; height:6%"><img src="img\flecha.jpg" style="width:100%; height:2%"></a> 
			<p></p>
				<div class="card" id="invoice">
			<fieldset> <legend style="font-family:verdana;font-weight:bold;">Resumen Final de Estimación</legend>

	<div class="container_resumenin" style="text-align:center">
	<p style="font-family:verdana;color:black;font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PLANIFICACIÓN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fin_horas_plani" disabled>&nbsp;horas</p>
	<p style="font-family:verdana;color:black;font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PREPARACIÓN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fin_horas_prepa" disabled>&nbsp;horas</p>
	<p style="font-family:verdana;color:black;font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EJECUCIÓN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fin_horas_eje" disabled>&nbsp;horas</p>
	<p style="font-family:verdana;color:black;font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CIERRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fin_horas_cierre" disabled>&nbsp;horas</p>
	<a><img src="img\flecha.jpg" style="width:50%; height:1%"></a>
	<p style="font-family:verdana;color:red;font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ESTIMADO TOTAL:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fin_horas_cierre" disabled>&nbsp;horas</p>
Hola, el Analista de TSOFT: <?php echo htmlspecialchars($_POST['analista_estima']); ?>.
Seleccionó la aplicación : <?php echo htmlspecialchars($_POST['lista2']);?>.
ha realizado una estimación el día:  <?php echo htmlspecialchars($_POST['fecha_estima']); ?>.

		
	</div>
</fieldset>
</div>
</div>

<br>
	<div class="col-md-12 text-right mb-3"style="text-align:center">
                <button class="btn btn-primary" id="download" style="font-family:verdana;font-weight:bold;"> Descargar en PDF</button>
            </div>
</body>
<script type="text/javascript">
var doc = new jsPDF();          
var elementHandler = {
  '#ignorePDF': function (element, renderer) {
    return true;
  }
};
var source = window.document.getElementsByTagName("body")[0];
doc.fromHTML(
    source,
    15,
    15,
    {
      'width': 180,'elementHandlers': elementHandler
    });

doc.output("dataurlnewwindow");
</script>
</html>