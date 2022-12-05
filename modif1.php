<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  margin-left:700px;
  
}
.logo{
    transform:translate(0px,-10px);
}
h2{
    transform: translate(-30px,20px);
}

div.gallery:hover {
  border: 1px solid #777;
}
.insert{
    transform:translate(50px,-125px);
}
a{
    text-decoration: none;
    color: black;
}
a:hover{
   
   color: black;
   font-style: italic;
}  
div.gallery img {
  width: 100%;
  height: auto;
  margin-left: 40px;
}
h1{
    font-size:30px;
    transform:translate(-300px,0px);
    font-weight:none;
}

div.desc {
  padding: 15px;
  text-align: center;
}
#gal{
    transform: translate(100px,-167px);
}
td{
    padding-bottom: 10px;
    padding-right: 95px;
}
    </style>
</head>
<body>
    <div style="width:1840px;height:939px;border:1px solid black;" >
        <div style="height:90px;border-bottom:1px solid black">
        <a href="ParcInfo.php"><img src="logoo.png" style="width:100px; height:90px;float:left" class="logo"></a>
            <h2 style="text-align:center;margin-top:30px;">SOFIMA BASE DONNÉ</h2>
        </div>
        <div style="height:180px;border-bottom:1px solid black">
        <div style="width: 140px;height:150px;">
            <div class="gallery" style="margin-left:818px">
  
            <a href="gestion1.php"><img src="Gestion.jpg" alt="Gestion" style="width:100px;">  

                <div class="desc">Gestion</div></a>
            </div>

        
        </div>
        <div style="margin-top:180px;" class="insert">
        <?php
            include_once 'DataBase.php';
            $val=$_POST['s'];
            $result0 =mysqli_query($conn,"SELECT id,theme,date_debut,date_fin,formateur,nb_heure,statut  
            from formations where id =$val ");
            $row0=mysqli_fetch_array($result0);
            
            
           
            
        ?><div class="container">
        <h1  style="text-align:center; margin-left:500px;">Modifier un employee</h1></div><br>
        <div class="container">
            <form method="post" action="update1.php" style="margin-left: 60px;">
            <table>
                <tr>    
                <td> <div class="form-floating "> 
            <input type="text" name="i" class="form-control" style="width:300px" id="f3" placeholder="date fin" value="<?php echo $row0['id']; ?>" /><label for="f3">id</div></td>
              
                    
                <td> <div class="form-floating "> 
            <input type="text" name="t" class="form-control" style="width:300px" id="f3" placeholder="date fin" value="<?php echo $row0['theme']; ?>" /><label for="f3">theme</div></td>
                    <td><div class="form-floating">
            <input type="date" name="d" class="form-control" id="f2" style="width:300px;" value="<?php echo $row0['date_debut'] ;?>"/><label for="f2">date debut</label></div>
        </td>
                </tr>
                <tr>
                <td><div class="form-floating">
                    <input type="date" name="da" class="form-control" style="width:300px" id="f12" placeholder="date_fin" value="<?php echo $row0['date_fin']; ?>" />
                <label for="f12">date fin</label>
            </div></td>

            <td> <div class="form-floating "> 
            <input type="text" name="f" class="form-control" style="width:300px" id="f3" placeholder="formateur" value="<?php echo $row0['formateur']; ?>" /><label for="f3">formateur</div></td>
                </tr>
                <tr> <td> <div class="form-floating "> 
            <input type="text" name="n" class="form-control" style="width:300px" id="f3" placeholder="nombre d'heure" value="<?php echo $row0['nb_heure']; ?>" /><label for="f3">nombre d'heure</div></td>
            <td> <div class="form-floating "> 
            <input type="text" name="st" class="form-control" style="width:300px" id="f3" placeholder="statut" value="<?php echo $row0['statut']; ?>" /><label for="f3">statut</div></td></tr><tr>
</tr>
            </table>
           <br>
                
            
            
            <input type="submit" name="save" value="submit" class="btn btn-primary" style="margin-left:250px;">
            
            <a href="Modif_Mat.php"><input type="button" name="retour" value="Return" class="btn btn-danger"/> </a>
            </form></div>
        </div>
        </div>
        <div style="border-top:1px solid black;height:80px;transform:translate(0px,560px);background-color:green;">
            <h5 style="transform:translate(-180px,20px);font-size:15px;font-style:italic"></h5>
        </div>
    </div>
   
</body>
</html>