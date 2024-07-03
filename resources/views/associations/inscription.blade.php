<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
<form action="{{ url('/users') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
    <label for="logo">LOGO</label>
    <input type="file" id="logo" name="logo" required>
    </div>
    <div>
        <label for="association_name">Nom de l'association:</label>
        <input type="text" id="association_name" name="association_name" required>
    </div>
    <div>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <label for="ninea">NINEA:</label>
        <input type="number" id="ninea" name="ninea" required>
    </div>
    <div>
        <label for="activite">Activité</label>
        <input type="text" id="activite" name="activite" required>
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" id="description" name="description" required>
    </div>
    <div>
        <label for="adresse">Adresse de l'association</label>
        <input type="text" id="adresse" name="adresse" required>
    </div>
    <div>
        <label for="date">Date de création</label>
        <input type="date" id="date" name="date_creation" required>
    </div>
    <button type="submit">Créer</button>
</form>

</body>
</html>