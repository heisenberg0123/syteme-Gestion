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
    $nom = $_POST['n'];
    $prenom= $_POST['p'];
    $adresse= $_POST['a'];
    $email=$_POST['e'];
    $tel=$_POST['t'];
    
  
	 $sql = "INSERT INTO clients (nom,prenom,adresse,email,tel)
	 VALUES ('$nom','$prenom','$adresse','$email','$tel')";
	 if (mysqli_query($conn, $sql)) {
		?>
		<h3>client a eté Ajouter</h3><br>
		<a href="ajout_client.php"><img src="rt.png" class="rt"/></a>
		<a href="client.php"><img src="home.png" /></a>
<?php
	 } else {?><h3>Il'ya un probeleme dans la saisire du donner du materiel<?php
		
	 ?>

</h3>
<br>
<a href="ajout_client.php"><img src="rt.png" class="rt"/></a>
<a href="client.php"><img src="home.png" /></a>
<?php
}
mysqli_close($conn);
}
?>

<body>
</html>