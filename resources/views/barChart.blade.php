<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript" src="https://code.highcharts.com/modules/exporting.js"></script>
    <script type="text/javascript">
        google.charts.load("current",{packages:["bar"]});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart(){
            var data = google.visualization.arrayToDataTable({{ Js::from($answer)}});
            var options = {
                chart: {
                    title : 'Retail sales',
                    subtitle: 'Retail sale of monthly',
                },
            };
            var chart = new google.charts.Bar(document.getElementById("barchart"));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
    <title>Barchart</title>
</head>
<body>
    <nav class="container navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/donutchart">CHARTS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/donutchart">DonutChart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/barchart">BarChart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/linechart">LineChart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 50px;">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">BarChart</h3>
					</div>
					<div class="panel-body" align="center">
						<div id="barchart"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>