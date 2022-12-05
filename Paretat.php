<?php
include_once 'DataBase.php';
$etat=$_POST['et'];
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            h1{
                text-align: center;
                font-style:italic;
                font-family:Freestyle Script;
                font-size:60px;
                font-weight:bold;
                color:rgb(21,27,141  );
            }
            table {
                border:1px solid black;
                width:95%;
                transform:translate(50px,50px);
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
                width:100px;height:90px;

            }
            i{
                color:green;
                font-weight:normal;
            }
            #h{
            text-align: center;
                font-style:italic;
                font-family:Freestyle Script;
                font-size:40px;
                font-weight:bold;
                color:rgb(21,27,141  );

           }
        </style>
    </head>
    <body>
        <a href="ParcInfo.php"><img src="logoo.png"/></a>
        <h1><i>.:.:</i> Liste complete <i>:.:.</i></h1>
        <h2 id="h">Par Etat</h2>
        <table>
            <tr>
            <th>matricule</th>
            <th>nom</th>
            <th>prenom</th>
            <th>adresse</th>
            <th>taille</th>
            <th>pointure</th>
            <th>date entrée</th>
            <th>emplacement</th>
            <th>poste</th>
            <th>etat</th>
            <th>utilisateur</th>
            </tr>
            <?php
            include_once 'DataBase.php';
            $result = mysqli_query($conn,"SELECT m.Code_a_barre,t.Libelle_type,m.Marque,d.Libelle_division,s.Libelle_service,m.Emplacement,u.Nom,m.Date,e.Libelle_etat,m.Remarque,t.Code_Type,e.Code_etat,m.adresse,m.taille,m.pointure
            from materiel m,division d,service s,utilisateur u,etat e,type t
            where e.Code_etat=$etat
            AND d.Code_division=s.Code_division
            AND s.Code_service=u.service
            AND e.Code_etat=m.etat
            AND t.Code_Type=m.Type
            order by d.Libelle_division,s.Libelle_service");
            while($row = mysqli_fetch_array($result)) {
                $Date=explode('-',$row['Date']);
                $annee=$Date[0];
	            $mois=$Date[1];
	            $jour=$Date[2];
	            $Date=$jour."/".$mois."/".$annee;
            echo "<tr><td>".$row['Code_a_barre']."</td><td>".$row['Marque']."</td><td>".$row['Remarque']."</td><td>".$row['adresse']."</td><td>".$row['taille']."</td><td>".$row['pointure']."</td><td>".$Date."</td><td>".$row['Libelle_type']."</td><td>".$row['Emplacement']."</td><td>".$row['Libelle_etat']."</td><td>".$row['Nom']."</td></tr>";
             }
            ?>
        </table>
    </body>
</html>
