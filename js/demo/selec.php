<?
	if(!isset ($_POST['gselec'])){echo"error";}
		else{$dato=$_POST['selection'];
			//echo $dato;}

?>
<script>
			var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [
	<?php
		echo $dato;
	$sql =("SELECT * FROM contador");
  $result = mysqli_query($conn,$sql);
	while ($registro = mysqli_fetch_array($result)){
	?>
	'<?echo $registro["esp"]?>',
	<?
	}
	?>
	],
    datasets: [{
      label: "existente",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: [<?
	  $sql ="SELECT * FROM contador";
	  $result = mysqli_query($conn, $sql);
	  ?>
	  <? while ($registro =mysqli_fetch_array($result)){?>'<?
	   echo $registro["cont"]?>',<?}?>
	   ],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 20
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 10,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return '' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': N°' + number_format(tooltipItem.yLabel);
        }
      }
    },
  }
});
</script>
<?}?>