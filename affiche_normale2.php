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
            
            <th>nom</th>
            <th>prenom</th>
            <th>adresse</th>
            <th>tel</th>
            <th>email</th>
           
            
            </tr>
            <?php
            include_once 'DataBase.php';
            $result = mysqli_query($conn,"SELECT nom,prenom,adresse,tel,email
            from clients
          
            
          ");
            
            
            while($row = mysqli_fetch_array($result)) {
              
            echo    "<tr><td>".$row['nom']."</td><td>".$row['prenom']."</td><td>".$row['adresse']."</td><td>".$row['tel']."</td><td>".$row['email']."</td></tr>"; 
                        }
            ?>
        </table>
    </body>
</html>
