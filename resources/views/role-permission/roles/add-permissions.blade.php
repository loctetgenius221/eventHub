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

        .btn {
            background-color: white;
            color: #FC5C65; /* Rose */
            border: 1px solid #FC5C65; /* Bordure rose */
        }

        .btn:hover {
            background-color: #e54b56; 
            color: white;
        }

        .btn:active {
            background-color: #FC5C65; /* Rose */
            color: white;
            border: 1px solid #FC5C65; 
        }

        .card {
            background-color: #ffffff; 
            border: 1px solid #e0e0e0; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); 
        }

        .card-header {
            background-color: #FC5C65; 
            color: white;
        }

        .card-header h4 {
            margin: 0;
        }

        .card-body {
            background-color: #f9f9f9; 
        }

        .card-body label {
            font-size: 2.3vh;
        }

        .form-control {
            border: 1vh solid #e0e0e0; 
            border-radius: 4vh; 
            width: 1em; 
            height: 1em; 
        }
        
        .text-danger {
            font-size: 14px;
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
                        @if(session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h4>Role: {{$role->name}}
                                    <a href="{{url('roles')}}" class="btn float-right">Retour</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="{{url('roles/'.$role->id.'/give-permissions')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        @error('permissions')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        <label for="">Permissions</label>
                                        <div class="row">
                                            @foreach ($permissions as $permission)
                                            <div class="col-md-2">
                                                <label for="">
                                                    <input type="checkbox"
                                                    name="permission[]"
                                                    class="form-control"
                                                    value="{{$permission->name}}"
                                                    {{in_array($permission->id, $rolePermissions) ? 'checked' : ''}} />
                                                    {{$permission->name}}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn">Modifier</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
