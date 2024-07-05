<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>EventHub</title>
    <link rel="stylesheet" href="{{ asset('css/association/style.css') }}">
</head>
<body>
    <div class="sidebar">
        <div class="logo-container">
            <img src="{{ asset('img/logo.png') }}" width="auto" height="60">
        </div>
        <nav class="text-dashbord">
            <ul >
                <li><a href="{{url('evennements')}}">Tableau de bord</a></li>
                <li><a href="#">Profil</a></li>
            </ul>
        </nav>
    </div>


    <div class="main-content">
      <style>
      .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
              }
      </style>
      <header class="header">
          {{-- <button class="menu-toggle d-md-none"><i class="fas fa-bars"></i></button> --}}
          <div class="menu-toggle">
              <nav class="navbar navbar-light fixed-top" style="background-color: #FC5C65;">
                <div class="container-fluid">
                  <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <a class="navbar-brand text-white" href="#">Association</a>
                  <a class="navbar-brand text-white" href="#"><div class="profile-icon space-x-1.5"></div></a>
                  <div class="offcanvas offcanvas-start text-bg-white w-[70%]" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body" >
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" >
                        <li ><a href="#"  class="text-[#FC5C65]">Dashboard</a></li>
                        <li ><a href="{{ route('associations.index') }}" class="text-[#FC5C65]">Profil</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>              
          <div class="welcome-message">Association</div>
          <div class="profile-icon"></div>
      </header>

                                     @yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
