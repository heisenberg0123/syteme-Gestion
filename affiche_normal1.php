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
            
            <th>theme</th>
            <th>date debut</th>
            <th>date fin</th>
            <th>formateur</th>
            <th>nombre d'heure</th>
            <th>statut</th>
            
            </tr>
            <?php
            include_once 'DataBase.php';
            $result = mysqli_query($conn,"SELECT theme,date_debut,date_fin,formateur,nb_heure,statut
            from formations
          
            
          ");
            
            
            while($row = mysqli_fetch_array($result)) {
              
            echo    "<tr><td>".$row['theme']."</td><td>".$row['date_debut']."</td><td>".$row['date_fin']."</td><td>".$row['formateur']."</td><td>".$row['nb_heure']."</td><td>".$row['statut']."</td></tr>"; 
                        }
            ?>
        </table>
    </body>
</html>
