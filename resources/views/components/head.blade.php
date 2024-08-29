
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>www.jobhunt.com</title>
    <link
      rel="shortcut icon"
      href="/tailwind/assets/images/favicon.svg"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="/tailwind/assets/css/tailwind.css" />
    <link rel="stylesheet" href="/tailwind/assets/css/index.css">
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets/job/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assets/job/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/job/css/bootstrap.min.css" rel="stylesheet">

    <link href="/cukie/public/js/css/cookit.min.css" rel="stylesheet">

    <link href="/fontawesome/css/font-awesome.css" type="text/css" rel="stylesheet">
    <link href="/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/assets/job/css/style.css" rel="stylesheet">
    
  </head>
  
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
      <a href="/" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
          <h1 class="m-0 text-2xl text-blue" ><element class="text-white bg-dark p-2 rounded-lg">Career</element>hive</h1>
      </a>
      <button type="button" class="navbar-toggler me-4" data-toggle="collapse" data-target="#navbarCollapse" >
          <span class="navbar-toggler-icon"></span>
      </button>
      @if(Auth::user())
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto p-4 p-lg-0">
              <a href="/" class="nav-item nav-link active" style="font-weight: bold;">Home</a>
              <a href="{{ route('blog') }}" class="nav-item nav-link" style="font-weight: bold;">Blog</a>
              <a href="/about" class="nav-item nav-link" style="font-weight: bold;">About</a>
              <form method="POST" action="/logout" enctype="multipart/form-data">
                @csrf
                <button class="nav-item nav-link" style="font-weight: bold;">Signout</button>
              </form>
          </div>
          <a href="/create" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
      </div>
      @else
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link active" style="font-weight: bold;">Home</a>
            <a href="{{ route('blog') }}" class="nav-item nav-link" style="font-weight: bold;">Blog</a>
            <a href="/about" class="nav-item nav-link" style="font-weight: bold;">About</a>
            <a href="/signup" class="nav-item nav-link" style="font-weight: bold;">SignUp</a>
        </div>
        <a href="/create" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
    @endif
  </nav>
  {{$slot}}
   <!-- Search Start -->

   <script defer src="/assets/js/alpine.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="/assets/job/lib/wow/wow.min.js"></script>
   <script src="/assets/job/lib/easing/easing.min.js"></script>
   <script src="/assets/job/lib/waypoints/waypoints.min.js"></script>
   <script src="/assets/job/lib/owlcarousel/owl.carousel.min.js"></script>
   <script src="/resources/js/bootstrap.bundle.min.js"></script>
   <script src="/assets/job/js/jquery-2.1.0.min.js"></script>
   <script src="/resources/js/bootstrap.js"></script>
   <script src="/cukie/public/js/cookit.min.js"></script>
   <script src="/cukie2/jquery.cookie.js"></script>
   <script src="/cukie2/test/tests.js"></script>

   <!-- Template Javascript -->
   <script src="/assets/job/js/main.js"></script>


   <script>
    $(document).ready(function() {
        var options = {
            lifetime: 1,
            backgroundColor: '#005555',
             messageColor: 'white',
             linkText: "",
            buttonColor: '#fffff',
            messageText: "Allow cookies for better performance on the Site",
            buttonText: "Accept Decline",
        }
        $.cookit(options);
    });
    </script>

<script>
$.cookie();
</script>