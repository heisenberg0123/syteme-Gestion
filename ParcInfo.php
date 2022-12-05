<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){


?>





<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  margin-left:200px;
  
}
h2{
    transform: translate(-30px,20px);
}
a{
    text-decoration: none;
    color: black;
}
a:hover{
   
   color: black;
   font-style: italic;
}
div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
  margin-left: 40px;
}
.logo{
    transform:translate(0px,-10px);
}
div.desc {
  padding: 15px;
  text-align: center;
}
#gal{
    transform: translate(100px,-167px);
}
.im{
    height:250px;
    transform: translate(180px,-125px);
    width: 450px;
    border-radius:50px;
}
    </style>
</head>
<body>
    <div style="width:1839px;height:950px;border:1px solid black;" >
   
        <div style="height:90px;border-bottom:1px solid black">
        <a href="ParcInfo.php"><img src="logoo.png" style="width:100px;height:90px;float:left" class="logo"></a>
        <a href="login.php"><img src="logout.png" style="width:100px;height:90px;float:right" class="logo"></a>
            <h2 style="text-align:center;margin-top:30px;">SOFIMA BASE DONNÉ</h2>
        </div>
        <div style="height:180px;border-bottom:1px solid black">
        <div style="width: 140px;height:150px;">
            <div class="gallery" style="margin-left:549;">
  
                <a href="gestion1.php"><img src="Gestion.jpg" alt="Gestion" style="width:100px;">  
                <div class="desc">Gestion</div>
                </a>
            </div>

            <div class="gallery" id="gal" style="margin-left:1000px;">
  
                 
            <a href="Affiche.php"><img src="Afficher.jpg" alt="Affichage" style="width:100px;">
  
  <div class="desc">Affichage</div></a>
            </div>
        </div>
        <img src="sofima.jpg" class="im" style="margin-right:590px; margin-left:500px ;">
    </div>
    <div style="border-top:1px solid black;height:80px;transform:translate(0px,570px);background-color:green;">
            <h5 style="transform:translate(-285px,20px);font-size:15px;font-style:italic">--SOFIMA FITERS--</h5>
        </div>
</body>
</html>
<?php 
}
else{header("Location:index.php");
    exit();
}?>