<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  margin-left:800px;
  
}
.logo{
    transform:translate(0px,-10px);
}
ul{
    transform:translate(800px,100px);
}
h2{
    transform: translate(-30px,20px);
}
li{
   padding-bottom:20px;
   text-decoration: none;
}

div.gallery:hover {
  border: 1px solid #777;
}
a{
    text-decoration: none;
    color: black;
}
ul{
    list-style-type: none;
    
}
li{
    padding-bottom:20px;
    font-family:Brush Script MT;
    font-size:37px;
}
li>a:hover{
    font-weight: normal;
}
a:hover{
   
    color: black;
    font-style:normal;
}
div.gallery img {
  width: 100%;
  height: auto;
  margin-left: 40px;
}

div.desc {
  padding: 15px;
  text-align: center;
}
#gal{
    transform: translate(100px,-167px);}
li>img{
    width:25px;
    margin-left:10px;
}
    </style>
</head>
<body>
    <div style="width:1840px;height:950px;border:1px solid black;" >
        <div style="height:90px;border-bottom:1px solid black">
            <a href="ParcInfo.php"><img src="logoo.png" style="width:100px;height:90px;float:left" class="logo"></a>
            <h2 style="text-align:center;margin-top:30px;">SOFIMA BASE DONNÉ</h2>
        </div>
        <div style="height:180px;border-bottom:1px solid black">
        <div style="width: 140px;height:150px;">
            <div class="gallery" style="margin-left:832px;">
  
                <a href="gestion1.php"><img src="gestion.jpg" alt="Gestion" style="width:100px;">  
                <div class="desc">Gestion</div>
                </a>
            </div>

            
        </div>
        <ul style="width:452px;">
            <li ><img src="add.png"><a href="Ajout_Mat.php" >Ajout un employee</a></li>
            <li><img src="modif.jpg"/><a href="Modif_Mat.php">Modifie un employee</a></li>
            <li><img src="supprimer.jpg"/><a href="Supprime_Mat.php">Supprime un employee</a></li>
            
        </ul>
    </div>
    <div style="border-top:1px solid black;height:80px;transform:translate(0px,570px);background-color:GREEN;">
            <h5 style="transform:translate(-225px,20px);font-size:15px;font-style:italic">--SOFIMA FILTRE--</h5>
        </div>
</body>
</html>