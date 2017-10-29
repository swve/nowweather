<!DOCTYPE html>
<html>

<head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/master.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  <title>Now Weather</title>
</head>

<body>
<?php
$weather_city=$_GET['city'];
$api_url="http://api.openweathermap.org/data/2.5/weather?q=".$weather_city."&units=metric&appid=0ca5b59e5fe2a566a4c9e3f63169fb95";
$weather_data=file_get_contents($api_url);
$json=json_decode($weather_data,true);





?>
  <div class="container">
    <div class="menu">
      <div class="row">
        <div class="col-10">
          <a href="index.php"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="col-2 menu2">
          <a href="#">About</a>
          <a href="#">GitHub</a>
        </div>
      </div>
    </div>
    <div class="address_name">
      <h1><?php echo $_GET['city'] ?></h1>
      <h2>Today</h2>
    </div>
<div class="row">
  <div class="col-6 icon_weather">
    <img src="img/cloud.png" alt="">
  </div>
  <div class="col-6 weather_infos">
    <p><?php echo $json['main']['temp'];?></p>

  </div>
</div>
<div class="weather_informations">
<h2><?php echo $json['weather']['0']['description'];?></h2>
</div>
  </div>
</body>

</html>
