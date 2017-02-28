<!DOCTYPE html>
<html lang="de">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=NTR|Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="main.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Header -->
<div class="jumbotron text-center">
  <h1>yabPI</h1>
  <p>Serveur qui runne sur mon Raspberry Pi</p>
</div>

<!-- Main content -->
<div class="jumbotron maincontent">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>Column 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
      <div class="col-md-6">
        <h3>Column 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
    </div>
  </div>

</div>

<!-- Footer -->
<div class="jumbotron footer">
  <div class="container">
    <div class="row">
      <?php include_once('status.php') ?>
      <div class="col-sm-4">
        <h2>Disk usage</h2>
        <p>
          <?php echo $diskusage; ?>
        </p>
      </div>
      <div class="col-sm-4">
        <h2>Uptime</h2>
        <p>
          <?php echo $uptime; ?>
        </p>
      </div>
      <div class="col-sm-4">
        <h2>Sysinfo</h2>
        <p>
          <?php echo $sysinfo;?>
        </p>
      </div>
    </div>
  </div>
</div>


</body>
</html>
