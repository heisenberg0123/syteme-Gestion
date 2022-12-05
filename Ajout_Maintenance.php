<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
            margin-left: 200px;
        }
        
        h2 {
            transform: translate(-30px, 20px);
        }
        
        a {
            text-decoration: none;
            color: black;
        }
        
        a:hover {
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
        
        .logo {
            transform: translate(0px, -10px);
        }
        
        div.desc {
            padding: 15px;
            text-align: center;
        }
        
        #gal {
            transform: translate(100px, -167px);
        }
        form{
            margin-top:250px;
            transform: translate(50px,-200px);
            
        }
        form>div{
            padding-bottom:10px;
        }
        .ta{
            transform: translate(350px,-270px);
        }
        .button{
            transform: translate(390px,-250px);
        }
    </style>
</head>

<body>
    <div style="width:1820px;height: 900px;border:1px solid black;">
        <div style="height:100px;border-bottom:1px solid black">
            <a href="ParcInfo.php"><img src="logo.png" style="width:100px;float:left" class="logo"></a>
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

                        <div class="desc">Affichage</div>
                    </a>
                </div>
            </div>
            <form action="process1.php" method="post">
            <?php
            include_once 'DataBase.php';

        ?>
                <div class="form-floating">
                    <select name="t" class="form-select" id="fm1" style="width:300px;">
                    <?php
 
                    $result = mysqli_query($conn,"SELECT M.Code_a_barre,U.Nom,U.matricule FROM materiel m,utilisateur U");
                    while($row = mysqli_fetch_array($result)) {
                    echo "<option value=".$row['Code_a_barre'].">".$row['Code_a_barre']." | ".$row['Nom']." | ".$row['matricule']."</option>";
                     }
 
                     ?>
                    </select>   
                    <label for="fm1">Equipement</label>
                </div>
                <div class="form-floating">
                    <input type="date" name="d" class="form-control" style="width:300px" id="fm2">
                    <label for="fm2">Date</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="in1" class="form-control" style="width:300px" id="fm3" placeholder="Intervention">
                    <label for="fm3">Intervention</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="in2" class="form-control" style="width:300px" id="fm4" placeholder="Intervenant" />
                    <label for="fm4">Intervenant</label>
                </div>
                <div class="form-floating ta">
                    <textarea name="r" id="fm5" cols="30" rows="10" class="form-control" placeholder="Remarque" style="width:300px;"></textarea>
                    <label for="fm5">Remarque</label>
                </div>
                <div class="button">
                <input type="submit" name="sbm" value="submit" class="btn btn-primary " />
                <input type="reset" name="rst" value="reset" class="btn btn-warning " />
                </div>
            </form>

        </div>
        <div style="border-top:1px solid black;height:88px;transform:translate(0px,500px);background-color:green;">
            <h5 style="transform:translate(-425px,20px);font-size:15px;font-style:italic">--L'Office National des Postes 2022--</h5>
        </div>
</body>

</html>