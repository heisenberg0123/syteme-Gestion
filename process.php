
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
	 $Type = $_POST['t'];
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
	 $sql = "INSERT INTO employee (Type,Date,nom,matricule,Emplacement,Etat,prenom,taille,pointure,adresse,etat_civil,nb_enfants,datee)
	 VALUES ('$Type','$Date','$nom','$matricule','$Emplacement','$Etat','$prenom ','$taille','$pointure','$adresse','$etat_civil','$nb_enfants','$datee')";
	 if (mysqli_query($conn, $sql)) {
		?>
		<h3>Un Materiel a eté Ajouter</h3><br>
		<a href="Ajout_Mat.php"><img src="rt.png" class="rt"/></a>
		<a href="Gestion.php"><img src="home.png" /></a>
<?php
	 } else {?><h3>Il'ya un probeleme dans la saisire du donner du materiel<?php
		
	 ?>

</h3>
<br>
<a href="Ajout_Mat.php"><img src="rt.png" class="rt"/></a>
<a href="Gestion.php"><img src="home.png" /></a>
<?php
}
mysqli_close($conn);
}
?>

<body>
</html>