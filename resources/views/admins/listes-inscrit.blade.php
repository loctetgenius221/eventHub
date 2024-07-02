@extends('layouts/admins.app')

@section('content')

            <div class="form-container">
                <h2 class="text-lg"><a href=""><i class="fa-solid fa-arrow-right fa-flip-horizontal" style="color: #f66151;margin-right:20px;"></i></a>La liste des inscrits </h2>
                <div class="liste-inscrits bg-blend-multiply mt-6 event-card">
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rôle</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>766149938</td>
                            <td>Mark@gmail.com</td>
                            <td><select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </td>
                            <td><button class="btn btn-danger btn-sm">Supprimer</button></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>766149938</td>
                            <td>jacob@gmail.com</td>
                            <td><select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </td>
                            <td><button class="btn btn-danger btn-sm">Supprimer</button></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>766149938</td>
                            <td>jacob@gmail.com</td>
                            <td><select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </td>
                            <td><button class="btn btn-danger btn-sm">Supprimer</button></td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>766149938</td>
                            <td>jacob@gmail.com</td>
                            <td><select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </td>
                            <td><button class="btn btn-danger btn-sm">Supprimer</button></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
               
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
@endsection