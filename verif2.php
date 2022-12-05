<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  margin-left:700px;
  
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
.s{
    margin-top:200px;
    margin-right:400px;
    transform: translate(50px,-100px);
}
h5{
    text-align: center;
    margin-left:200px;
} 
ul{
    list-style: none;
}
li{
    padding-bottom:15px;
}
    </style>
</head>
<body>
    <div style="width:1840px;height: 950px;border:1px solid black;" >
        <div style="height:90px;border-bottom:1px solid black">
        <a href="ParcInfo.php"><img src="logoo.png" style="width:100px;height:90px;float:left" class="logo"></a>
            <h2 style="text-align:center;margin-top:30px;">SOFIMA BASE DONNÉ</h2>
        </div>
        <div style="height:180px;border-bottom:1px solid black">
        <div style="width: 140px;height:150px;">
            <div class="gallery" style="margin-left:833px;">
  
                <a href="gestion1.php"><img src="Gestion.jpg" alt="Gestion" style="width:100px;">  
                <div class="desc">Gestion</div>
                </a>
            </div>

           
        </div>
        <div class="s">
        <h5 >Est-ce-que vous etes sure de supprimer cet client?</h5>
        <ul>
        <?php
            include_once 'DataBase.php';
            $val=$_POST['s'];   
            $result = mysqli_query($conn,"SELECT id,nom,prenom,adresse,email,tel FROM clients where id =$val ");
            while($row = mysqli_fetch_array($result)) {
                echo "<li>nom: ".$row['nom']."</li><li>adresse: ".$row['adresse']."</li><li>tel: ".$row['tel']."</li>";
                 }
        ?>
        </ul>
        <a href="take2.php?Code=<?php echo $val; ?>"><input type="submit" value="Supprimer" class="btn btn-danger" name="dlt" style="margin-left:225px;transform:translate(0px,38px);" /></a>
        <a href="supprim_client.php"><input type="button" value="Retour" class="btn btn-primary" name="rto" style="margin-left:150px;margin-bottom:-60px;" /></a>
                 <input type="hidden" name="k" value="<?php echo $k; ?>" />
        
        </div>
       
    </div>
    <div style="border-top:1px solid black;height:88px;transform:translate(0px,560px);background-color:green;">
            <h5 style="transform:translate(-425px,20px);font-size:15px;font-style:italic"></h5>
        </div>
</body>
</html>