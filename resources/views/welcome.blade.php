<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>it-shop</title>
    <!-- improt css-->
    <link rel="stylesheet" href="{{asset('frontend/node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- เมนู -->
  <nav class="navbar navbar-light" style="background-color: #d9e7eb">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <!-- <i class="fa-brands fa-github"></i> -->
        <img src="{{asset('frontend/รูปภาพ/logoicon.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top"">
        it-shop
      </a>
      <a href="{{route('login')}}" class="btn btn-primary">Login</a>
      <a href="{{route('register')}}" class="btn btn-primary">register</a>
    </div>
  </nav>
<!-- จบเมนู -->

<!-- slide bar -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('frontend/รูปภาพ/เลขที่ 1.jpg')}}" class="d-block w-100" height="600" alt="">
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend/รูปภาพ/เลขที่ 2.jpg')}}" class="d-block w-100" height="600" alt="">
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend/รูปภาพ/เลขที่ 3.jpg')}}" class="d-block w-100" height="600" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- จบ slide bar -->


    <script src="{{asset('frontend/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/node_modules/@popperjs/core/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('frontend/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
