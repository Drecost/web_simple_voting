<?php
require_once 'conecta.php';

$Samsung= 0;
$Xiaomi = 0;
$Apple = 0;

$consulta = $pdo->query("SELECT voto FROM voto;");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
if ($linha["voto"] == "Samsung"){$Samsung++;}
if ($linha["voto"] == "Xiaomi"){$Xiaomi++;}
if ($linha["voto"] == "Apple"){$Apple++;}
}

?>


<html>

  <head>
        <link rel="stylesheet" href="style2.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load("current", {packages:["corechart"]});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Task', 'Hours per Day'],
              ['Samsung',     <?php echo("$Samsung"); ?>],
              ['Xiaomi',     <?php echo("$Xiaomi"); ?>],
              ['Apple',   <?php echo("$Apple"); ?> ]
              
            ]);

            var options = {
              title: 'Preferência entre os modelos de Smartphones: ',
              is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
          }
        </script>
  </head>

  <body>

    <div id="caixa_geral"">

      <div id="piechart_3d"></div>

      
      
      <a href="index.php"><div id="botao"><button>Voltar</button></div></a>
      

    </div>
              

    <div class="footer">
        <p>Developed by: Andre Costa, Alex Moreira e Brunno Henrique</p>
        <p>2020 ©</p>
    </div>

  </body>


</html>