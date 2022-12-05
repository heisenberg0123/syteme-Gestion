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
table {
                border:1px solid black;
                width:95%;
                transform:translate(25px,-10px);
            }
            th{
                background-color: yellow;
                border:1px solid black;
                text-align:center;
            }
            td{
                border:1px solid black;

            }
            img{
                width:100px;

            }
            i{
                color:yellow;
                font-weight:normal;
            }
            .form{
                    margin-left:350px;
                    margin-top:200px;
                    transform:translate(-50px,-100px); 
            }
    </style>
</head>
<body>
    <div style="width:1000px;height: 2000px;border:1px solid black;" >
        <div style="height:100px;border-bottom:1px solid black">
        <a href="ParcInfo.php"><img src="logo.png" style="width:100px;float:left" class="logo"></a>
            <h2 style="text-align:center;margin-top:30px;">bd SOFIMA</h2>
        </div>
        <div style="height:180px;border-bottom:1px solid black">
        <div style="width: 140px;height:150px;">
            <div class="gallery">
  
                <a href="Gestion.php"><img src="Gestion.jpg" alt="Gestion" style="width:100px;">  
                <div class="desc">Gestion</div>
                </a>
            </div>

            <div class="gallery" id="gal" style="margin-left:300px;">
  
                 
            <a href="Affiche.php"><img src="Afficher.jpg" alt="Affichage" style="width:100px;">
  
  <div class="desc">Affichage</div></a>
            </div>
        </div>
        <form action="Supp_Maint.php" method="post" >

        
        <div class="form-floating form" >
            <input type="text" class="form-control" placeholder="Code a barre" id="searchC" style="width:350px;" name="s"/>
            <label for="searchC">Code a barre</label>
            <input type="Date" class="form-control" placeholder="Date" id="searchD" style="width:350px" name="sd"  />
            <label for="searchD" style="margin-top:55px;" >Date</label>
        <input type="submit" class="btn btn-primary" value="Search" name="srch" style="margin-left:400px;transform:translateY(-70px);" />

        </div>
        </form>
        <table>
            <tr>
            <th>Equipement</th>
            <th>Date</th>
            <th>Intervention</th>
            <th>Intervenant</th>
            <th>Remarque</th>
            </tr>
            <?php
            include_once 'DataBase.php';
            $result = mysqli_query($conn,"SELECT * FROM maintenance");
            while($row = mysqli_fetch_array($result)) {
                $Date=explode('-',$row['Date']);
                $annee=$Date[0];
	            $mois=$Date[1];
	            $jour=$Date[2];
	            $Date=$jour."/".$mois."/".$annee;
            echo "<tr><td>".$row['Equipement']."</td><td>".$Date."</td><td>".$row['Intervention']."</td><td>".$row['Intervenant']."</td><td>".$row['Remarque']."</td></tr>";
             }
            ?>
        </table>
    </div>
    <div style="border-top:1px solid black;height:88px;transform:translate(0px,1600px);background-color:yellow;">
            <h5 style="transform:translate(-180px,20px);font-size:15px;font-style:italic">--L'Office National des Postes 2022--</h5>
        </div>
</body>
</html>