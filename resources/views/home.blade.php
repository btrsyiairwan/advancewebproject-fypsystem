<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>FYP Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <!--TemplateMo 563 SEO Dream https://templatemo.com/tm-563-seo-dream-->


</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
             <h4>Final Year Project</h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <!-- <li class="scroll-to-section"><a href="{{url('/list')}]">Project List</a></li>
              <li class="scroll-to-section"><a href="#about">About Us</a></li> -->
 
              <li>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                     <x-app-layout>                     
                     </x-app-layout>
                     @else
                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
            </li>    
            </ul>    

            <!-- <a class='menu-trigger'>
                <span>Menu</span>
            </a> -->
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h1>Welcome Student & Examiner</h1>
            
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">

              <div class="center-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
 

  <div class="card">
  <div class="card-body">
  <h4 class="card-title" style="color:black">Student Final Year Project List</h4><br>
  <div class="table-responsive">
          <table class="table" style="color:black">
          <thead>
              <tr>
                <th> ID </th>
                <th> Project Type </th>
                <th> Project Title </th>
                <th> Student Name </th>
                <th> Supervisor Name</th>
                <th> Examiner 1 Name</th>
                <th> Examiner 2 Name</th>
                <th> Start Date </th>
                <th> End Date </th>
                <th> Duration </th>
                <th> Progress </th>
                <th> Status </th>  
               </tr>                         
            </thead>

        @foreach($list as $x)
            <tr>
                <td>{{$x['id']}}</td>
                <td>{{$x['projecttype']}}</td>
                <td>{{$x['projecttitle']}}</td>
                <td>{{$x['student']}}</td>
                <td>{{$x['supervisor']}}</td>
                <td>{{$x['examiner1']}}</td>
                <td>{{$x['examiner2']}}</td>
                <td>{{$x['startdate']}}</td>
                <td>{{$x['enddate']}}</td>
                <td>{{$x['duration']}}</td>
                <td>{{$x['progress']}}</td>
                <td>{{$x['status']}}</td>
            </tr>
        @endforeach     
                </table>           
</div>
</div>
</div>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>