<?php
session_start();
if (isset($_POST["title"])){
    if(isset($_SESSION["notes"])) {
        if (isset($_POST["content"])) $_SESSION["notes"] += [$_POST["title"] => $_POST["content"]];
        else $_SESSION["notes"] +=[$_POST["title"] => ""];
    }
    else{
       if (isset($_POST["content"])) $_SESSION["notes"]=array($_POST["title"] => $_POST["content"]);
       else $_SESSION["notes"]=array($_POST["title"] => "");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Mes notes</title>
</head>
<body>
<a href="ajout.php">Ajouter Note!</a>
<div >
    <h4>Mes notes</h4>
    <?php
    foreach($_SESSION["notes"] as $title => $content)
    {
    echo "<div class='card' style='padding: 5px '>
        <div class='card-header'>" .  $title . "</div>
        <div class='card-body'> " .$content.  "</div>
        
    </div>";

    }
?>
</div>
</body>
</html>

