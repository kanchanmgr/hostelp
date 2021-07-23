<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Pathivar Girls Hostel</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  
</head>
<body>
  <div class="wrapper">
    <div class="row">
      <div class="col-md">
          <!-- top nevbar -->
    <div style="background-color: #4a4e69; padding:2vh;">
      <div class="container-md text-white ">
          <div class="row">
              <div class="col-10">
                <i class="fas fa-map-marker-alt"></i> Dharan,Sunsari Nepal &nbsp;
                <a href="tel:+9779811342777" class=" text-decoration-none text-white">
                  <i class="fas fa-phone-square-alt"></i> 98111342777
                </a> 
              </div>
              <div class="col-2">
                  <i class="fab fa-facebook-square"></i> &nbsp;
                  <i class="fab fa-youtube-square"></i>

              
              </div>
          
          </div>
      </div>


  </div>
    
    
     <!-- Nevbar -->
        <div class="sticky-top">
          <nav class="navbar navbar-expand-lg navbar-light bg-white" style="border-bottom:3px solid #4a4e69 ;">
              <div class="container ">
                <div class="col-md-8">
                  <a class="navbar-brand " href="#"><img src="{{ asset('/images/pgh.png') }}" width="" alt="log"></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mr-auto" id="navbarNavDropdown">
                  <div class="col-md-4">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Facilities</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Gallary</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Rooms
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
      </div>


  


    
      </div>
    </div>
  </div>

  {{-- content --}}
  @yield('content')

  {{-- javascript --}}
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>