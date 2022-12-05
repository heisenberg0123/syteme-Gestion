

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
    <div style="width:1825px;height: 1010px;border:1px solid black;" >
        <div style="height:90px;border-bottom:1px solid black">
        <a href="ParcInfo.php"><img src="logoo.png" style="width:100px; height:90px;float:left" class="logo"></a>
            <h2 style="text-align:center;margin-top:30px;">SOFIMA BASE DONNÉ</h2>
        </div>
        <div style="height:180px;border-bottom:1px solid black">
        <div style="width: 140px;height:150px;">
            <div class="gallery" style="margin-left:822px;">
  
            <a href="gestion1.php"><img src="Gestion.jpg" alt="Gestion" style="width:100px;">  

                <div class="desc">Gestion</div></a>
            </div>

           
        </div>
        <div style="margin-top:180px;" class="insert">
        <?php
            include_once 'DataBase.php';
            $val=$_POST['s'];
            $result0 =mysqli_query($conn,"SELECT m.matricule,e.Code_etat,t.Libelle_type,t.Code_Type,m.nom,Emplacement,e.Libelle_etat,m.prenom,Date,m.adresse,m.taille,m.pointure,m.etat_civil,datee,m.nb_enfants
            from employee m,type t,etat e
            where m.matricule=$val 
            AND t.Code_Type=Type 
            AND e.Code_etat=Etat 
            
            
        ");
            $row0=mysqli_fetch_array($result0);
            
            
           
            
        ?>
        <h1 style="text-align:center; margin-left:485px;">Modifier un employee</h1><br>
        <div class="container">
            <form method="post" action="update.php" style="margin-left: 60px;">
            <table>
                <tr>
                <td> <div class="form-floating "> 
            <input type="text" name="m" class="form-control" style="width:300px" id="f3" placeholder="nom" value="<?php echo $row0['nom']; ?>" /><label for="f3">nom</div></td>
                    <td><div class="form-floating">
            <input type="date" name="d" class="form-control" id="f2" style="width:300px;" value="<?php echo $row0['Date'] ;?>"/><label for="f2">Date entree</label></div>
        </td>
                </tr>
                <tr>
                <td><div class="form-floating">
                    <input type="text" name="r" class="form-control" style="width:300px" id="f12" placeholder="prenom" value="<?php echo $row0['prenom']; ?>" />
                <label for="f12">prenom</label>
            </div></td>

            <td> <div class="form-floating "> 
            <input type="text" name="a" class="form-control" style="width:300px" id="f3" placeholder="nom" value="<?php echo $row0['adresse']; ?>" /><label for="f3">adresse</div></td>
                </tr>
                <tr> <td> <div class="form-floating "> 
            <input type="date" name="da" class="form-control" style="width:300px" id="f3" placeholder="nom" value="<?php echo $row0['datee']; ?>" /><label for="f3">date de naissance</div></td>
            <td> <div class="form-floating "> 
            <input type="text" name="ee" class="form-control" style="width:300px" id="f3" placeholder="nom" value="<?php echo $row0['nb_enfants']; ?>" /><label for="f3">nombre enfants</div></td></tr><tr>
            <td> <div class="form-floating "> 
            <input type="text" name="ta" class="form-control" style="width:300px" id="f3" placeholder="taille" value="<?php echo $row0['taille']; ?>" /><label for="f3">taille</div></td>
                    
            <td> <div class="form-floating "> 
            <input type="text" name="p" class="form-control" style="width:300px" id="f3" placeholder="pointure" value="<?php echo $row0['pointure']; ?>" /><label for="f3">pointure</div></td>
                </tr>
                <tr>
                <td> <div class="form-floating">    
             
             <select name="t" class="form-select" id="f1" style="width:300px;" aria-label="Floating label select example" >
             <?php
 
             $result = mysqli_query($conn,"SELECT Libelle_Type,Code_Type FROM type");
             while($row = mysqli_fetch_array($result)) {?>
             
             <option value="<?php echo $row['Code_Type']?>" <?php if($row['Code_Type']==$row0['Code_Type']){echo "selected";}; ?> ><?php echo $row['Libelle_Type']?></option>

             <?php
             }
             ?>
             </select>
         <label for="f1">emplacement</label>
                 
                 </div>
                </td>

        <td> <div class="form-floating">
            
            <select name="em" class="form-select" id="f5" style="width:300px;" >
                <option value="601" <?php if($row0['Emplacement']=="poste1"){echo "selected";}; ?>>poste1</option>
                <option value="602" <?php if($row0['Emplacement']=="poste2"){echo "selected";}; ?>>poste2</option>
                <option value="603" <?php if($row0['Emplacement']=="poste3"){echo "selected";}; ?>>poste3</option>
               
            </select>
                <label for="f5">poste</label>
            </div>
        </td>

                </tr>
                <tr>
               

        <td> <div class="form-floating">
            <select name="e" class="form-select" style="width:300px;" id="f9">
            <?php

            $result5 = mysqli_query($conn,"SELECT * FROM etat");
            while($row5 = mysqli_fetch_array($result5)){ ?>
             
            <option value="<?php echo $row5['Code_etat']?>" <?php if($row5['Code_etat']==$row0['Code_etat']){echo "selected";}; ?> ><?php echo $row5['Libelle_etat']?></option>

            <?php
            }
            ?>
            </select>
                <label for="f9">Etat</label>
            </div>
        </td>

                <td> <div class="form-floating">
            <input type="text" name="c" class="form-control" style="width:300px;" id="f4" placeholder="CodeBarre" value="<?php echo $row0['matricule'];?>" /><label for="f4">Matricule</label></div></td></tr>
              
       
            <td> <div class="form-floating">
            
            <select name="et" class="form-select" id="f9" style="width:300px;" >
                <option value="celebataire" <?php if($row0['etat_civil']=="celebataire"){echo "selected";}; ?>>celebataire</option>
                <option value="marieé" <?php if($row0['etat_civil']=="marieé"){echo "selected";}; ?>>marieé</option>
                <option value="divorceé" <?php if($row0['etat_civil']=="divorceé"){echo "selected";}; ?>>divorceé</option>
              
            </select>
                <label for="f9">etat civil</label>
            </div>
        </td>
  </tr>
            </table>
           <br>
                
            
            
            <input type="submit" name="save" value="submit" class="btn btn-primary" style="margin-left:250px;">
            
            <a href="Modif_Mat.php"><input type="button" name="retour" value="Return" class="btn btn-danger"/> </a>
            </form></div>
        </div>
        </div>
        <div style="border-top:1px solid black;height:40px;transform:translate(0px,710px);background-color:green;">
            <h5 style="transform:translate(-180px,20px);font-size:15px;font-style:italic">--SOFIMA FILTRE--</h5>
        </div>
    </div>
   
</body>
</html>