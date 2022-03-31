
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ajouter une note</title>
</head>
<body>

    <div class="card">
<form method="post" action="index.php">
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" required>
    </div>
    <div>
        <label for="content">Content</label>
        <input type="text" id="content" name="content">
    </div>
    <div>
        <input type="submit" name="submit" value="Enregistrer">
    </div>
</form>
    </div>
<a href="index.php">Retour a mes notes</a>
</body>
</html>