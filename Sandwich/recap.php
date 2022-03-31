<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Recap de votre commande</title>
</head>
<body>
<p>Détails de la commande :</p>
<p> Nom : <?php echo $_POST["nom"] ?></p>
<p> Prenom : <?php echo $_POST["prenom"] ?></p>
<p> Adresse : <?php echo $_POST["adresse"] ?></p>
<p> Nombre de sandwichs: <?php echo $_POST["nbsdwch"] ?></p>
<p> Type du sandwich: <?php echo $_POST["type"] ?></p>
<p> Ingredients choisis: <?php  if (isset($_POST["mayo"])) {echo ("Mayo");}?> <br>
    <?php if (isset($_POST["harissa"])) {echo ("Harrisa");} ?> <br>
    <?php if (isset($_POST["salade"])) {echo ("Salade");}?>
</p>
<p><?php $prix=4*$_POST["nbsdwch"];
if ($prix>40) {$prix=0.9*$prix;
printf ("Remise de 10% sur votre commande! ");}
printf ("Le prix total de la commande est ".$prix." DT"); ?></p>
<?php
$newname=uniqid(rand(),false);
move_uploaded_file($_FILES["CIN"]["tmp_name"], "./img/" . $newname . $_FILES["CIN"]["type"]);
?>
</body>
</html>
