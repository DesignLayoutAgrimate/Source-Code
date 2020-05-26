<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cloud Computing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Nguyễn Văn Tuấn B1607138">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style type="text/css">
    .card-text{
      color:white;
    }
  </style>
</head>
<body >

<div class="container" style="padding-top:10px;text-align: ">
  
  <!-- card-columns -->
  <div class="card-columns" style="margin-top:10px;">
    <a href="setup.php">
      <div class="card bg-info">
        <div class="card-body text-center">
          <h1 class="card-text">Create table</h1>
        </div>
      </div>
    </a>

    <a href="add_account.php">
      <div class="card bg-primary">
        <div class="card-body text-center">
          <h1 class="card-text">Add account</h1>
        </div>
      </div>
    </a>

    <a href="list_account.php">
      <div class="card bg-success">
        <div class="card-body text-center">
          <h1 class="card-text">List account</h1>
        </div>
      </div>
    </a>

  </div>
  <!-- card-columns -->
  

  <!-- carousel -->
  <div id="demo" class="carousel slide" data-ride="carousel" style="margin-bottom:20px;">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="cloud1.png" style="width:1100px;height:500px;">
      </div>
      <div class="carousel-item">
        <img src="cloud2.jpg" style="width:1100px;height:500px;">
      </div>
      <div class="carousel-item">
        <img src="cloud3.png" style="width:1100px;height:500px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>
  <!-- carousel -->


</div>

</body>
</html>



