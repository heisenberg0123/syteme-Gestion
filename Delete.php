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
$val=$_GET["Code"];
$val1=explode(' ',$val);
$val=$val1[0];
$val2=$val1[1];
$sql = "DELETE FROM maintenance WHERE Equipement='$val' AND Date='$val2'";
if (mysqli_query($conn, $sql)) {
    ?>
    <h3>Un Mainteneance a eté Supprimer</h3><br>
    <a href="Supprime_Maintenance.php"><img src="rt.png" class="rt"/></a>
    <a href="Gestion.php"><img src="home.png" /></a>
<?php
 } else {?><h3>Il'ya un probeleme dans la Supprission du Maintenance<?php
    
 ?>

</h3>
<br>
<a href="Supprime_Maintenance.php"><img src="rt.png" class="rt"/></a>
<a href="Gestion.php"><img src="home.png" /></a>
<?php
}
mysqli_close($conn);

?>

<body>
</html>