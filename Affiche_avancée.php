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
.f{
    margin-top:80px;
    transform:translate(-450px,0px);
}
.s{
    margin-left:180px;
    transform:translate(280px,-50px);
    width:150px;
}
.f1{
    margin-left:100px;
    transform:translate(-10px,-50px);    
}
.s1{
    transform:translate(230px,-50px);
    width:150px;
}

    </style>
</head>
<body>
    <div style="width:1820px;height: 900px;border:1px solid black;" >
        <div style="height:90px;border-bottom:1px solid black">
        <a href="ParcInfo.php"><img src="logoo.png" style="width:100px;height:90px;float:left" class="logo"></a>
            <h2 style="text-align:center;margin-top:30px;">Parc Informatique</h2>
        </div>
        <div style="height:180px;border-bottom:1px solid black">
        <div style="width: 140px;height:150px;">
            <div class="gallery">
  
                <a href="Gestion.php"><img src="Gestion.jpg" alt="Gestion" style="width:100px;">  
                <div class="desc">Gestion</div>
                </a>
            </div>

            <div class="gallery" id="gal" style="margin-left:900px;">
  
                 
            <a href="Affiche.php"><img src="Afficher.jpg" alt="Affichage" style="width:100px;">
  
  <div class="desc">Affichage</div></a>
            </div>
        </div>
        <?php
            include_once 'DataBase.php';
            $selected= 'selected="selected"';
            (isset($_POST['liste'])) ? $liste= $_POST['liste'] : $liste="";
            echo '<div class="f">';
            echo '<form action="" method="post">';
            echo '<p style="font-style: italic;font-family:Times New Roman;font-size:20px;">Choix du critaire de recherche :</p>';
            echo '<select name="liste" onchange="submit()" class="form-select s">';
          
            echo '<option value="un"';if($liste=='un') echo 'selected';echo '>Par emplacement</option>';
            echo '<option value="deux"';if($liste=='deux') echo 'selected';echo '>Par etat</option>';
            echo '</select>';
            echo '</form>';
            echo '<br>';
            echo '</div>';
            echo '<div class="f1">';
           
     if($liste=="un"){?>
        <form action="Partype.php" method="post">
         <p style="font-style: italic;font-family:Times New Roman;font-size:18px;">Recherche par empacement:</p>
         
         <select  class="form-select s1" style="width:200px;" name="ty" >
             <?php

             $result = mysqli_query($conn,"SELECT * FROM type");
             while($row = mysqli_fetch_array($result)) {
             echo "<option value=".$row['Code_Type'].">".$row['Libelle_type']."</option>";
              }

              ?>
             </select>   
         <input type="submit" value="VALIDER" class="btn btn-primary" style="  transform:translate(450px,-90px);"/>
         </form>'
    <?php }
     if($liste=="deux"){?>
        <form action="Paretat.php" method="post">
         <p style="font-style: italic;font-family:Times New Roman;font-size:18px;">Recherche par etat:</p>
         
         <select  class="form-select s1" style="width:200px;" name="et" >
             <?php

             $result = mysqli_query($conn,"SELECT * FROM Etat");
             while($row = mysqli_fetch_array($result)) {
             echo "<option value=".$row['Code_etat'].">".$row['Libelle_etat']."</option>";
              }

              ?>
             </select>   
         <input type="submit" value="VALIDER" class="btn btn-primary" style="  transform:translate(450px,-90px);"/>
         </form>'
    <?php }
            echo '</div>';

        ?>

    </div>
    <div style="border-top:1px solid black;height:88px;transform:translate(0px,510px);background-color:green;">
            <h5 style="transform:translate(-225px,20px);font-size:15px;font-style:italic">--L'Office National des Postes 2022--</h5>
        </div>
</body>
</html>