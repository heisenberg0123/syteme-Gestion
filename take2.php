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

$sql = "DELETE FROM clients WHERE id='" . $_GET["Code"] . "'";
if (mysqli_query($conn, $sql)) {
    ?>
		<h3>La Suppression du client a ete effectuer</h3><br>
		<a href="suuprim_client.php"><img src="rt.png" class="rt"/></a>
		<a href="client.php"><img src="home.png" /></a>
<?php
	 } else {?><h3>Il'ya un probeleme dans la Supprission du client<?php
		
	 ?>
</h3>
<br>
<a href="supprim_form.php"><img src="rt.png" class="rt"/></a>
<a href="formation.php"><img src="home.png" /></a>
<?php
}
mysqli_close($conn);

?>

<body>
</html>