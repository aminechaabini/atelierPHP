<?php
if (isset($_POST["submit"])) {
    if (!isset($_COOKIE["voted"])) {
        setcookie("voted", $_POST["note"], time() + 120);
    } else {?>
<script>alert("Vous avez deja voté!");</script>   <?php
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Evaluation du contenu du cours PHP</title>
</head>
<body>
<form method="post" action="" >
<p>Que pensez vous du contenu du cours PHP?</p>
    <label for="mauvais">Mauvais</label>
    <input type="radio" id="mauvais" name="note" value="mauvais">
    <label for="moyen">Moyen</label>
    <input type="radio" id="moyen" name="note" value="moyen">
    <label for="bon">Bon</label>
    <input type="radio" id="bon" name="note" value="bon">
    <div><input type="submit" name="submit" ></div>
</form>
</body>
</html>
