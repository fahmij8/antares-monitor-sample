<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Monitoring Kualitas Air</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href='./materialize/css/materialize.min.css'>
    <link type="text/css" rel="stylesheet" href='./materialize/css/custom.css'>
    <meta name="theme-color" content="#90caf9" />
    <link rel="apple-touch-icon" href="./materialize/1.png" />
    <link rel="shortcut icon" href="./materialize/1.png" />
</head>
<body>
    <header>
        <!-- Title Section -->
        <div class="title blue lighten-3 valign-wrapper z-depth-2">
            <h3>Monitor Kualitas Air</h3>
        </div>
    </header>

    <main>
        <!-- Display Data Section -->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l3">
                    <div class="card-panel">
                        <img src="./materialize/1.png" class="responsive-image">
                        <h1>Kekeruhan</h1>
                        <span class="black-text force-center" id="data1"></span>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card-panel">
                        <img src="./materialize/2.png" class="responsive-image">
                        <h1>pH</h1>
                        <span class="black-text force-center" id="data2"></span>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card-panel">
                        <img src="./materialize/3.png" class="responsive-image">
                        <h1>Suhu</h1>
                        <span class="black-text force-center" id="data3"></span>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card-panel">
                        <img src="./materialize/4.png" class="responsive-image">
                        <h1>Kelembaban</h1>
                        <span class="black-text force-center" id="data4"></span>
                    </div>
                </div>
            </div>
        

            <!-- Button Update -->
            <div class="force-center">
                <a class="waves-effect waves-light btn blue darken-1 pulse" id="upd">Update</a>
            </div>

            <!-- Chart -->
            <div class="chart-data">
                <canvas id="chart"></canvas>
            </div>
        </div>
    </main>



</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./materialize/js/materialize.min.js"></script>
<script src="./materialize/js/custom.js"></script>
</html>