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
{	 $id=$_POST['i'];
    $nom = $_POST['n'];
    $prenom= $_POST['p'];
    $adresse= $_POST['a'];
    $email=$_POST['e'];
    $tel=$_POST['t'];
    

	$sql1="UPDATE clients SET   nom='$nom',prenom='$prenom',adresse='$adresse',email='$email',tel='$tel' WHERE id='$id'";
	
	if (mysqli_query($conn, $sql1)) {
		?>
		<h3>La Mise a Jour du donner dun client a ete effectuer</h3><br>
		<a href="modif_client.php"><img src="rt.png" class="rt"/></a>
		<a href="client.php"><img src="home.png" /></a>
<?php
	 } else {?><h3>Il'ya un probeleme dans la saisire du donner du employee<?php
		
	 ?>

</h3>
<br>
<a href="modif_form.php"><img src="rt.png" class="rt"/></a>
<a href="formation.php"><img src="home.png" /></a>
<?php
}
mysqli_close($conn);
}
?>

<body>
</html>