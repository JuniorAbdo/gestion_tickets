@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="panel panel-default">
              
                <div class="panel-body">
                    <canvas id="canvas" height="280" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    var axeX = <?php echo $axeX; ?>;
    var axeY = <?php echo $axeY; ?>;
    var barChartData = {
        labels: axeX,
        datasets: [{
            label: 'Ticket',
            backgroundColor: [
      'rgba(255, 99, 132, 1)',
      'rgba(255, 159, 64, 1)',
      'rgba(255, 205, 86, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(153, 102, 255, 1)',
      'rgba(201, 203, 207, 1)',
      'rgba(255, 99, 132, 1)',
      'rgba(255, 159, 64, 1)',
      'rgba(255, 205, 86, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(201, 203, 207, 1)',
    ], 
            data: axeY
        }]
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 1,
                        borderColor: '#000',
                        borderSkipped: 'bottom'
                    }
                },
                scales: {
                    xAxes: [{
                        barThickness: 30,  // number (pixels) or 'flex'
                        maxBarThickness: 40 ,// number (pixels)
                        gridLines: {
                color: "rgba(0, 0, 0, 0.2)",
            }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            beginAtZero: true,
                             max: 100
                           
                        },
                        gridLines: {
                color: "rgba(0, 0, 0, 0.2)",
            }
                        
                    }]
                    ,


                    

                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Nomber des tickets par type de ce mois'
                }
            }
        });
    };
</script>
@endsection