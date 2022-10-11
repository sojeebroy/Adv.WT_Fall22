<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#"><h4>Demo Task</h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup">Sign up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sign in</a>
      </li>

    </ul>
  </div>
</nav>
<div>
    <br><br>
    <span>
        This is demo page for lab task.
        The course name is Advanced programming in Web Technologies.
    </span>
    <br><br>
</div>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Los_Angeles%2C_Winter_2016.jpg/1024px-Los_Angeles%2C_Winter_2016.jpg" alt="Los Angeles" class="d-block" style="width:1900px;height:700px;">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.travelandleisure.com/thmb/7ltibDJNDmr5xvIC1gdaCJ_wi4E=/2250x0/filters:no_upscale():max_bytes(150000):strip_icc():gifv():format(webp)/chicago-illinois-CHITG0221-e448062fc5164da0bba639f9857987f6.jpg" alt="Chicago" class="d-block" style="width:1900px;height:700px;">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://media.timeout.com/images/105375857/750/422/image.jpgny.jpg" alt="New York" class="d-block" style="width:1900px;height:700px;">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>



</body>
</html>
