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
                width:60%;
                transform:translate(150px,50px);
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
            ul{
                margin-top:50px;
            }
            li{
                padding-bottom:10px;
                margin-left:50px;
                list-style-type: none;
            }
        </style>
    </head>
    <body>
        <a href="ParcInfo.php"><img src="logo.png"/></a>
        <h1><i>.:.:</i> Fiche equipement <i>:.:.</i></h1>
        <ul>
        <?php
            include_once 'DataBase.php';
            $val=$_POST['s'];   
            $result = mysqli_query($conn," SELECT m.Code_a_barre,m.Type,u.Matricule,m.Utilisateur,t.Libelle_type,Marque,d.Libelle_division,s.Libelle_service,Emplacement,u.Nom,Date,e.Libelle_etat,Remarque,t.Code_Type,d.Code_division,s.Code_service,s.Code_division,e.Code_etat
            from materiel m,type t,division d,service s,utilisateur u,etat e 
            WHERE m.Code_a_barre=$val
            AND t.Code_Type=m.Type
            AND d.Code_division=s.Code_division
            AND s.Code_service=u.service
            AND e.Code_etat=m.etat
            AND m.Utilisateur=u.Matricule");
           
            while($row = mysqli_fetch_array($result)) {
                $Date=explode('-',$row['Date']);
                $annee=$Date[0];
                $mois=$Date[1];
                $jour=$Date[2];
                $Date=$jour."/".$mois."/".$annee;
                echo "<li><strong>Code a barre:</strong> ".$row['Code_a_barre']."</li><li><strong>Type</strong>: ".$row['Libelle_type']."</li><li><strong>Marque:</strong> ".$row['Marque']."</li><li><strong>Division: </strong>".$row['Libelle_division']."</li><li><strong>Service: </strong>".$row['Libelle_service']."</li><li><strong>Local: </strong> ".$row['Emplacement']."</li><li><strong>Utilisateur:</strong> ".$row['Nom']."</li><li><strong>Date: </strong> ".$Date."</li><li><strong>Etat: </strong> ".$row['Libelle_etat']."</li><li><strong>Remarque:</strong>".$row['Remarque']."</li>";
                 }
        ?>
        </ul>
        <table>
            <tr>
            <th>Date</th>
            <th>Intervention</th>
            <th>Intervenant</th>
            <th>Remarque</th>
            
            </tr>
            <?php
            include_once 'DataBase.php';
            $result = mysqli_query($conn,"SELECT * FROM maintenance WHERE Equipement=$val");
            while($row = mysqli_fetch_array($result)) {
                $Date=explode('-',$row['Date']);
                $annee=$Date[0];
	            $mois=$Date[1];
	            $jour=$Date[2];
	            $Date=$jour."/".$mois."/".$annee;
            echo "<tr><td>".$Date."</td><td>".$row['Intervention']."</td><td>".$row['Intervenant']."</td><td>".$row['Remarque']."</td></tr>";
             }
            ?>
        </table>
    </body>
</html>
