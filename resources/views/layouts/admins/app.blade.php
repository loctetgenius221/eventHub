<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>EventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
</head>
<body>
    <div class="sidebar">
        <div class="logo-container">
            <img  class="w-15"   src="{{ asset('img/logo.png') }}" width="300" height="60">
        </div>
        <nav class="nav flex-column w-100">
          <a class="nav-link" href="{{ route('admin.accueil') }}">Dashboard</a>
          <a class="nav-link" href="{{ route('associations.index') }}">Association</a>
          <a class="nav-link" href="{{ route('admin.users.index') }}">Participants</a>
          <a href="{{url('roles')}}"class="nav-link">Roles</a>
          <a href="{{url('permissions')}}" class="nav-link">Permissions</a>
      </nav>
      <form action="{{ route('logout') }}" method="POST">
    @csrf
    @method('POST')
    <div class="mt-auto">
        <button type="submit" class="nav-link logout">Déconnexion</button>
    </div>
</form>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="main-content">
        <header class="header bg-white">
            <div class="menu-toggle">
             {{-- <button class="menu-toggle d-md-none"><i class="fas fa-bars text-gray-800"></i></button> --}}
             <nav class="navbar navbar-light bg-white fixed-top">
               <div class="container-fluid">
                 <button class="navbar-toggler text-rose-500  text-[#FC5C65] " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>
                 <a class="navbar-brand text-gray-800" href="#">Dashbord</a>
                 <a class="navbar-brand text-gray-800" href="#"><div class="profile-icon space-x-1.5"></div></a>
                 <div class="offcanvas offcanvas-start text-bg-white w-4/5 max-w-[80%]" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                   <div class="offcanvas-header">
                     <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                   </div>
                   <div class="offcanvas-body">
                     <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 text-decoration-color: #fda4af;">
                       <li><a href="#" class="">Dashboard</a></li>
                       <li><a href="{{ route('associations.index') }}" class="">Association</a></li>
                       {{-- <li><a href="#" class="">Evénements</a></li> --}}
                       <li><a href="{{ route('admin.users.index') }}"  class="">Participants</a></li>
                       <li><a href="#" class="">Role/permission</a></li>
                     </ul>
                   </div>
                 </div>
               </div>
             </nav>
            </div>
            <div class="welcome-message text-center"><h2 class="text-gray-800">Dashbord</h2></div>
            <div class="flex flex-row items-center space-x-4 ">
            
             <div class="relative" x-data="{ open: false }">
              <button @click="open = !open" class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none transition duration-150 ease-in-out">
                  <div class="mr-3">{{ Auth::user()->name }}</div>
                  <div>
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                  </div>
              </button>
              <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5">
                  <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                          Log Out
                      </button>
                  </form>
              </div>
          </div>
           </header>

    @yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
