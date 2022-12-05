<?php
include_once 'DataBase.php';
$local = $_POST['emp'];


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
           #h{
            text-align: center;
                font-style:italic;
                font-family:Freestyle Script;
                font-size:40px;
                font-weight:bold;
                color:rgb(21,27,141  );

           }
            table {
                border:1px solid black;
                width:95%;
                transform:translate(50px,50px);
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
                width:100px;height:90px;

            }
            i{
                color:yellow;
                font-weight:normal;
            }
        </style>
    </head>
    <body>
        <a href="ParcInfo.php"><img src="logoo.png"/></a>
        <h1><i>.:.:</i> Liste complete <i>:.:.</i></h1>
        <h2 id="h">Par Local<h2>
        <table>
            <tr>
            <th>Code a barre</th>
            <th>Type</th>
            <th>Marque</th>
            <th>Division</th>
            <th>Service</th>
            <th>Local</th>
            <th>Utilisateur</th>
            <th>Date</th>
            <th>Etat</th>
            <th>Remarque</th>
            </tr>
            <?php
            
            $result = mysqli_query($conn,"SELECT m.Code_a_barre,t.Libelle_type,m.Marque,d.Libelle_division,s.Libelle_service,m.Emplacement,u.Nom,m.Date,e.Libelle_etat,m.Remarque
            from materiel m,division d,service s,utilisateur u,etat e,type t
            where m.Emplacement=$local
            And d.Code_division=s.Code_division
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
            echo "<tr><td>".$row['Code_a_barre']."</td><td>".$row['Libelle_type']."</td><td>".$row['Marque']."</td><td>".$row['Libelle_division']."</td><td>".$row['Libelle_service']."</td><td>".$row['Emplacement']."</td><td>".$row['Nom']."</td><td>".$Date."</td><td>".$row['Libelle_etat']."</td><td>".$row['Remarque']."</td></tr>";
             }
            ?>
        </table>
    </body>
</html>
