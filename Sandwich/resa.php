<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Sandwich!!!</title>
</head>
<body>
<form method="post" action="recap.php">
    <div>
    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom" required>
    </div>
    <div>
    <label for="prenom">Prenom</label>
    <input type="text" id="prenom" name="prenom" required>
    </div>
    <div>
    <label for="nbsdwch">Nombre de sandwichs</label>
    <input type="number" id="nbsdwch" name="nbsdwch" required>
    </div>
    <div>
    <label for="adresse">Adresse</label>
    <input type="text" id="adresse" name="adresse" required>
    </div>
    <div>
    <label for="type">Type</label>
    <select id="type" name="type" required>
        <option>Boeuf</option>
        <option>Poulet</option>
        <option>Vegetarien</option>
    </select>
    </div>
    <div>
    <p>Ingerdients</p>
    <label for="harissa">Harissa</label>
    <input type="checkbox" id="harissa" name="harissa">
    <label for="mayo">Mayo</label>
    <input type="checkbox" id="mayo" name="mayo">
    <label for="salade">Salade</label>
    <input type="checkbox" id="salade" name="salade">
    </div>
    <div>
        <label for="CIN">PHOTO CIN</label>
        <input type="file" id="CIN" name="cin" required>
    </div>
    <div>
    <input type="submit">
    </div>
</form>
</body>
</html>