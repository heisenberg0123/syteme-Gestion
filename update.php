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
{	 $Type = $_POST['t'];
	$Date = $_POST['d'];
	$nom = $_POST['m'];
	$matricule=$_POST['c'];
	$Emplacement=$_POST['em'];
	
	$Etat=$_POST['e'];
	$prenom=$_POST['r'];
	$taille=$_POST['ta'];
	$pointure=$_POST['p'];
	$adresse=$_POST['a'];
	$etat_civil=$_POST['et'];
	$nb_enfants=$_POST['ee'];
	$datee=$_POST['da'];
	$sql1="UPDATE employee SET Type='$Type',Date='$Date',nom='$nom',matricule='$matricule',Emplacement='$Emplacement',Etat='$Etat',prenom='$prenom',adresse='$adresse',taille='$taille',pointure='$pointure',etat_civil='$etat_civil',nb_enfants='$nb_enfants',datee='$datee' WHERE matricule='$matricule'";
	
	if (mysqli_query($conn, $sql1)) {
		?>
		<h3>La Mise a Jour du donner du employee a ete effectuer</h3><br>
		<a href="Modif_Mat.php"><img src="rt.png" class="rt"/></a>
		<a href="Gestion.php"><img src="home.png" /></a>
<?php
	 } else {?><h3>Il'ya un probeleme dans la saisire du donner du employee<?php
		
	 ?>

</h3>
<br>
<a href="Modif_Mat.php"><img src="rt.png" class="rt"/></a>
<a href="Gestion.php"><img src="home.png" /></a>
<?php
}
mysqli_close($conn);
}
?>

<body>
</html>