<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Inclure Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f5f7; /* Gris clair */
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #ffffff; /* Blanc */
            border-right: 1px solid #e0e0e0; /* Bordure grise */
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        .logo img {
            width: auto;
            height: 60px;
        }

        .nav-link {
            font-size: 18px;
            color: #FC5C65; /* Rose */
        }

        .nav-link.active {
            background-color: #FC5C65; /* Rose */
            color: white;
        }

        .nav-link:hover {
            color: #ffffff;
            background-color: #FC5C65; /* Rose */
        }

        .mt-auto {
            margin-top: auto;
        }

        .nav-link.logout {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }

        .card {
            background-color: #ffffff; /* Blanc */
            border: 1px solid #e0e0e0; /* Bordure grise */
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #FC5C65; /* Rose */
            color: white;
            padding: 15px;
            border-bottom: 1px solid #e0e0e0; /* Bordure grise */
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 20px;
        }

        .btn{
            background-color: white; /* Rose */
            color: #FC5C65;
            border:none
        }
        .btn:active{
           background-color:#FC5C65;
           border:none
        }

        .btn:hover {
            background-color: #e54b56; /* Rose plus foncé */
            color:white;
        }

        .btn-modify {
            background-color: #FC5C65;
            color: white;
            border: none;
            padding: 1.5vh;
            border-radius: 1vh;
            text-decoration:none
        }
       a:hover{
        text-decoration:none;
        color:grey
       }

        .btn-delete {
            background-color: white;
            color: #FC5C65;
            border: 0.2vh solid #FC5C65;
            padding: 1.5vh 2vh;
            border-radius: 1vh;
            margin-left: 4vh;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar d-flex flex-column align-items-center p-3 text-white">
        <div class="logo mb-5"><img src="{{ asset('img/logo.png') }}" width="auto" height="60"></div>
        <nav class="nav flex-column w-100">
        <a class="nav-link" href="{{ route('admin.accueil') }}">Dashboard</a>
          <a class="nav-link" href="{{ route('associations.index') }}">Association</a>
          <a class="nav-link" href="{{ route('admin.users.index') }}">Participants</a>
          <a href="{{url('roles')}}"class="nav-link">Roles</a>
          <a href="{{url('permissions')}}" class="nav-link">Permissions</a>
            </nav>
            <div class="mt-auto">
                <a class="nav-link " href="#">Déconnexion</a>
            </div>
        </div>
        <div class="content flex-fill">
       <div class="container mt-5">
           <div class="row">
             <div class="col-md-12">

             @if (session('status'))
             <div class="alert alert success">{{session ('status')}}</div>
             @endif
               <div class="card">
                <div class="card-header mt-3">
                <h4>Permissions
                    <a href="{{url('permissions/create')}}" class="btn  float-right">Ajouter une permission</a>
                   </h4>
                </div>
               <div class="card-body">
                   <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($permissions as $permission)
                        <tr>
                            <td>{{$permission->id}}</td>
                            <td>{{$permission->name}}</td>
                            <td>
                                <a href="{{url('permissions/'.$permission->id.'/edit')}}" class="btn-modify">Modifier</a>
                                <a href="{{url('permissions/'.$permission->id.'/delete')}}" class="btn-delete">Supprimer</a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                   </table>
               </div>
             </div>
           </div>
       </div>
    </div>

    <!-- Inclure Bootstrap JS et dépendances -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
