<?php
$max = 4;
$maxDartScore = $max*3;
$score=[];
for($dart1=0; $dart1<=$max; $dart1++){
  for($dart2=$dart1; $dart2<=$max; $dart2++){
    for($dart3=$dart2; $dart3<=$max; $dart3++){
      $total = $dart1 + $dart2 + $dart3;
      $score[$total]+=1;
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Darts</title>
  <link rel="stylesheet" href="//bootswatch.com/3/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="darts.css">
  
  <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Score');
        data.addColumn('number', 'Number of possible ways');
        data.addRows([
          
          <?
          
          for($i=0; $i<=$maxDartScore; $i++){
            echo "['$i',$score[$i]],";
          }
          
          ?>
          
          
        ]);

        // Set chart options
        var options = { title:'DARTS: Number of Possible Ways to Score',
                        width:600,
                        height:500,
                        legend:'none',
                        vAxis: {title: "# of Possible Ways",ticks:[0,1,2,3,4,5,6]},
                        hAxis: {title: "Score"}
                      };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        google.visualization.events.addListener(chart, 'ready', function () {
          chart_div.innerHTML = '<img src="' + chart.getImageURI() + '">';
        });
        chart.draw(data, options);
      }
    </script>
  
</head>
<body>
  <div class="container">
    <br>
    <div class="col-md-12">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="tableCell">SCORE</th>
          <?php
            for($th=0;$th<=$maxDartScore;$th++){
              echo "<th>$th</th>";
            }
          ?>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="tableCell"><strong>No. OF POSSIBLE WAYS</strong></td>
          <?php
            for($i=0;$i<=$maxDartScore;$i++){      
               echo "<td>$score[$i]</td>";
            }
          ?>
        </tr>
      </tbody>
    </table>
  </div>
    <div class="row">
      <div class="col-md-6">
       
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="headerCell">DART 1</th>
              <th class="headerCell">DART 2</th>
              <th class="headerCell">DART 3</th>
              <th class="headerCell">TOTAL</th>
            <tr></tr>
          </thead>
          <tbody>
            
              <?php
              
              $score=[];
for($dart1=0; $dart1<=$max; $dart1++){
  for($dart2=$dart1; $dart2<=$max; $dart2++){
    for($dart3=$dart2; $dart3<=$max; $dart3++){
      $total = $dart1 + $dart2 + $dart3;
      $score[$total]+=1;
      echo "<tr>";
              echo "<td>$dart1</td><td>$dart2</td><td>$dart3</td><td>$total</td>";
              echo "</tr>";
    }
  }
}
              
              ?>
            
          </tbody>
        </table>
        
        
        
      </div>
      <div class="col-md-6">
        <div id="chart_div"></div>
      </div>
    </div>
  </div>
</body>
</html>