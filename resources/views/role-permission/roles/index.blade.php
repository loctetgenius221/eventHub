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
    background-color: #f8f9fa;
}

.sidebar {
    height: 100vh;
    width: 250px;
}

.logo {
    font-size: 24px;
    font-weight: bold;
    text-align: center;
}

/* .nav-link.active {
    background-color: #ff4d4d;
} */
.nav-link:hover{
    color:white;
    background-color:#FC5C65;
}
.nav-link {
    font-size: 18px;
    color:#FC5C65;
}

.mt-auto {
    margin-top: auto;
}

.nav-link.logout {
    display: flex;
    align-items: center;
    justify-content: center;
}

/* .nav-link.logout::before {
    content: '⇦';
    margin-right: 10px;
} */

    </style>
</head>
<body>

@include('role-permission.nav-links')
    <div class="d-flex">
        <div class="sidebar d-flex flex-column align-items-center p-3 text-white">
        <div class="logo mb-5"><img src="{{ asset('img/logo.png') }}" width="auto" height="60"></div>
            <nav class="nav flex-column w-100">
                <a class="nav-link " href="#">Dashboard</a>
                <a class="nav-link " href="#">Association</a>
                <a class="nav-link " href="#">Événements</a>
                <a class="nav-link " href="#">Participants</a>
                <a class="nav-link  active" href="#">Role/permission</a>
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
                <h4>Role
                    <a href="{{url('roles/create')}}" class="btn btn-primary float-end">Ajouter un role</a>
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
                        @foreach($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td>
                            <a href="{{ url('roles/' . $role->id . '/give-permissions') }}" class="btn btn-success">
                                   Ajouter/Modifier un role ou une permission
                                       </a>

                                <a href="{{url('roles/'.$role->id.'/edit')}}" class="btn btn-success">Modifier</a>
                                <a href="{{url('roles/'.$role->id.'/delete')}}" class="btn btn-danger mx-2">Supprimer</a>
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
