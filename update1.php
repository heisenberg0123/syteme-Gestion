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
    $theme = $_POST['t'];
    $date_debut= $_POST['d'];
    $date_fin= $_POST['da'];
    $nb_heure=$_POST['n'];
    $formateur=$_POST['f'];
    
    $statut=$_POST['st'];

	$sql1="UPDATE formations SET   theme='$theme',date_debut='$date_debut',date_fin='$date_fin',formateur='$formateur',nb_heure='$nb_heure',statut='$statut' WHERE id='$id'";
	
	if (mysqli_query($conn, $sql1)) {
		?>
		<h3>La Mise a Jour du donner dune formation a ete effectuer</h3><br>
		<a href="modif_form.php"><img src="rt.png" class="rt"/></a>
		<a href="formation.php"><img src="home.png" /></a>
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