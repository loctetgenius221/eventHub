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
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
</head>
<body>
    <div class="sidebar">
        <div class="logo-container">
            <img  class="w-15"   src="{{ asset('img/logo.png') }}" width="300" height="60">
        </div>
        <nav class="text-dashbord">
            <ul >
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('associations.index') }}">Association</a></li>
                <li><a href="#">Evénements</a></li>
                <li><a href="{{ route('admin.users.index') }}">Participants</a></li>
                <li><a href="#">Role/permission</a></li>
            </ul>
        </nav>
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
                     <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                       <li><a href="#" class="text-gray-800">Dashboard</a></li>
                       <li><a href="#" class="text-gray-800">Association</a></li>
                       <li><a href="#" class="text-gray-800">Evénements</a></li>
                       <li><a href="{{ route('admin.users.index') }}"  class="text-gray-800">Participants</a></li>
                       <li><a href="#" class="text-gray-800">Role/permission</a></li>
                     </ul>
                   </div>
                 </div>
               </div>
             </nav>
            </div>
            <div class="welcome-message text-center"><h2 class="text-gray-800">Dashbord</h2></div>
            <div class="flex flex-row items-center space-x-4 ">
             <div class="relative">
               <input type="text" class="recherche rounded-xl text-center border border-sky-500 pl-8" placeholder="Recherche">
               <i class="fa-solid fa-magnifying-glass absolute left-2 top-1/2 transform -translate-y-1/2" style="color: #c0bfbc;"></i>
             </div>
             <div class="profile-icon space-x-1.5"></div>
             <div class="nom-admin flex flex-col text-center">
               <p class="text-gray-800">Serigne</p>
               <p class="text-gray-800">Serigne</p>
             </div>
            </div>
           </header>

    @yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
