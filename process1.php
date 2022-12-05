
<html>
	<head>
		<style>
			h3{
				text-align: center;
				margin-top:350px;
				font-style:italic;

			}
			img{
				width:50px;
				margin-left:450px;
			}
			.rt{
				transform:translate(435px,0px);
			}
		</style>
	</head>
	<body>
<?php
include_once 'DataBase.php';
if(isset($_POST['save']))
{	 
	 $theme = $_POST['t'];
	 $date_debut= $_POST['d'];
	 $date_fin= $_POST['da'];
	 $nb_heure=$_POST['n'];
	 $formateur=$_POST['f'];
	 
	 $statut=$_POST['s'];
	 
	 $sql = "INSERT INTO formations (theme,date_debut,date_fin,nb_heure,formateur,statut)
	 VALUES ('$theme','$date_debut','$date_fin','$nb_heure','$formateur','$statut')";
	 if (mysqli_query($conn, $sql)) {
		?>
		<h3>Une formation a eté Ajouter</h3><br>
		<a href="Ajout_Mat.php"><img src="rt.png" class="rt"/></a>
		<a href="Gestion.php"><img src="home.png" /></a>
<?php
	 } else {?><h3>Il'ya un probeleme dans la saisire du donner du materiel<?php
		
	 ?>

</h3>
<br>
<a href="Ajout_Mat.php"><img src="rt.png" class="rt"/></a>
<a href="gestion1.php"><img src="home.png" /></a>
<?php
}
mysqli_close($conn);
}
?>

<body>
</html>