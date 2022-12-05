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
        </style>
   
</head>
    <body>
    <a href="ParcInfo.php"><img src="logoo.png"/></a> 
        <h1><i>.:.:</i> Liste complete <i>:.:.</i></h1>
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
            $result = mysqli_query($conn,"SELECT m.matricule,t.Libelle_type,m.nom,m.Emplacement,m.Date,e.Libelle_etat,m.prenom,m.taille,m.pointure,m.adresse,m.etat_civil,m.nb_enfants,m.datee
            from employee m,etat e,type t
            where 
             e.Code_etat=m.etat
            AND t.Code_Type=m.Type
          ");
            
            
            while($row = mysqli_fetch_array($result)) {
                $Date=explode('-',$row['Date']);
                $annee=$Date[0];
	            $mois=$Date[1];
	            $jour=$Date[2];
	            $Date=$jour."/".$mois."/".$annee;
                $datee=explode('-',$row['datee']);
                $anneee=$datee[0];
	            $moise=$datee[1];
	            $joure=$datee[2];
	            $datee=$joure."/".$moise."/".$anneee;
            echo "<tr><td>".$row['matricule']."</td><td>".$row['nom']."</td><td>".$row['prenom']."</td><td>".$row['adresse']."</td><td>".$datee."</td><td>".$row['nb_enfants']."</td><td>".$Date."</td><td>".$row['taille']."</td><td>".$row['pointure']."</td><td>".$row['Libelle_type']."</td><td>".$row['Emplacement']."</td><td>".$row['Libelle_etat']."</td><td>".$row['etat_civil']."</td></tr>";
             }
            ?>
        </table>
    </body>
</html>
