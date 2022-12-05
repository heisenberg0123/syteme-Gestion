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
                background-color: green;
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
    <div style="width:1839px;border:1px solid black;" >
        <div style="height:90px;border-bottom:1px solid black">
        <a href="ParcInfo.php"><img src="logoo.png" style="width:100px;height:90px;float:left" class="logo"></a>
            <h2 style="text-align:center;margin-top:30px;">SOFIMA BASE DONNÉ</h2>
        </div>
        <div style="height:180px;border-bottom:1px solid black">
        <div style="width: 140px;height:150px;">
            <div class="gallery">
  
                <a href="gestion1.php"><img src="Gestion.jpg" alt="Gestion" style="width:100px;">  
                <div class="desc">Gestion</div>
                </a>
            </div>

           
        </div>
        <form action="Modif.php" method="post" >

        
        <div class="form-floating form" >
            <input type="text" class="form-control" placeholder="Code a barre" id="search" style="width:350px;" name="s"/>
            <label for="search">matricule</label>
        <input type="submit" class="btn btn-primary" value="Search" name="srch" style="margin-left:400px;transform:translateY(-50px);" />

        </div>
        </form>
        <table>
            <tr>
            <th>matricule</th>
            <th>nom</th>
            <th>prenom</th>
            <th>adresse</th>
            <th>date de naissance</th>
            <th>nombre enfants</th>
            <th>date entrée</th>
            <th>taille</th>
            <th>pointure</th>
            <th>emplacement</th>
            <th>poste</th>
            <th>statut</th>
            <th>Etat civil</th>
          
            </tr>
            <?php
            include_once 'DataBase.php';
            $result = mysqli_query($conn,"SELECT m.matricule,t.Libelle_type,m.nom,m.Emplacement,m.Date,e.Libelle_etat,m.prenom,m.adresse,m.taille,m.pointure,m.etat_civil,m.nb_enfants,m.datee
            from employee m,etat e,type t
            where  e.Code_etat=m.etat
            AND t.Code_Type=m.Type  ");
            while($row = mysqli_fetch_array($result)) {
                $Date=explode('-',$row['Date']);
                $annee=$Date[0];
	            $mois=$Date[1];
	            $jour=$Date[2];
	            $Date=$jour."/".$mois."/".$annee;
                $datee=explode('-',$row['datee']);
                $anneee=$datee[0];
	            $moise=$datee[1];
	            $jour=$datee[2];
	            $datee=$joure."/".$moise."/".$anneee;
            echo  "<tr><td>".$row['matricule']."</td><td>".$row['nom']."</td><td>".$row['prenom']."</td><td>".$row['adresse']."</td><td>".$datee."</td><td>".$row['nb_enfants']."</td><td>".$Date."</td><td>".$row['taille']."</td><td>".$row['pointure']."</td><td>".$row['Libelle_type']."</td><td>".$row['Emplacement']."</td><td>".$row['Libelle_etat']."</td><td>".$row['etat_civil']."</td></tr>";
             }
            ?>
        </table>
    </div>
  
</body>
</html>