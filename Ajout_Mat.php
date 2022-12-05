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
    <div style="width:1832px;height: 990px;border:1px solid black;" >
        <div style="height:90px;border-bottom:1px solid black">
        <a href="ParcInfo.php"><img src="logoo.png" style="width:100px; height:90px;float:left" class="logo"></a>
            <h2 style="text-align:center;margin-top:30px;">SOFIMA BASE DONNÉ</h2>
        </div>
        <div style="height:180px;border-bottom:1px solid black">
        <div style="width: 140px;height:150px;">
            <div class="gallery" style="margin-left:825px;">
  
            <a href="gestion1.php"><img src="Gestion.jpg" alt="Gestion" style="width:100px;">  

                <div class="desc">Gestion</div></a>
            </div>

        </div>
        <div style="margin-top:180px; margin-left:200px;" class="insert">
        <?php
            include_once 'DataBase.php';

        ?>
        <h1 style="text-align:center; margin-left:350px;"  >Ajout un employee</h1><br>
        <div class="container">
        <form method="post" action="process.php">
            <table>
            <tr>
                    <td><div class="form-floating">
            <input name="m" rows="3" cols="80" placeholder="nom" class="form-control" id="f10" placeholder="nom"></textarea>
                <label for="f10">nom</label>
            </div></td>
                


                    <td><div class="form-floating">
            <input type="date" name="d" class="form-control" id="f2" style="width:300px;"/><label for="f2">Date entree</label></div>
        </td>  
                </tr>
                <tr>
                    <td> <div class="form-floating "> 
            <input type="text" name="r" class="form-control" style="width:300px" id="f3" placeholder="prenom"/><label for="f3">prenom</div></td>
            <td> <div class="form-floating "> 
            <input type="text" name="a" class="form-control" style="width:300px" id="f3" placeholder="adresse"/><label for="f3">adresse</div></td></tr>
            <td> <div class="form-floating "> 
            <input type="text" name="p" class="form-control" style="width:300px" id="f3" placeholder="pointure"/><label for="f3">pointure</div></td>
                    <td> <div class="form-floating">
            <input type="text" name="c" class="form-control" style="width:300px;" id="f4" placeholder="matricule"/><label for="f4">matricule</label></div></td>
                </tr>
                <tr>  <td> <div class="form-floating "> 
            <input type="date" name="da" class="form-control" style="width:300px" id="f15" placeholder="date de naissance"/><label for="f3">date de naissance</div></td>
            <td> <div class="form-floating "> 
            <input type="text" name="ee" class="form-control" style="width:300px" id="f16" placeholder="nombre enfants"/><label for="f3">nombre enfants</div></td></tr>
                    <td> <div class="form-floating">
            
            <select name="em" class="form-select" id="f5" style="width:300px;">
                <option >poste1</option>
                <option >poste2</option>
                <option >poste3</option>
               
            </select>
                <label for="f5">poste</label>
            </div>
        </td>
                    
             
                    <td> <div class="form-floating">
            <select name="e" class="form-select" style="width:300px;" id="f9">
            <?php

            $result5 = mysqli_query($conn,"SELECT * FROM etat");
            while($row5 = mysqli_fetch_array($result5)) {
            echo "<option value=".$row5['Code_etat'].">".$row5['Libelle_etat']."</option>";
            }

            ?>
            </select>
                <label for="f9">statut</label>
            </div>
        </td></tr><tr><td> <div class="form-floating "> 
            <input type="text" name="ta" class="form-control" style="width:300px" id="f11" placeholder="taille"/><label for="f11">taille</div></td>
               
                    <td> <div class="form-floating">    
             
             <select name="t" class="form-select" id="f1" style="width:300px;" aria-label="Floating label select example">
             <?php
 
             $result = mysqli_query($conn,"SELECT Libelle_Type,Code_Type FROM type");
             while($row = mysqli_fetch_array($result)) {
                 echo "<option value=".$row['Code_Type'].">".$row['Libelle_Type']."</option>";
             }
             
             ?>
             </select>
         <label for="f1">emplacement</label>
                 
                 </div>
                </td> </tr>
                <tr><td> <div class="form-floating">
            
            <select name="et" class="form-select" id="f9" style="width:300px;">
                <option >celebataire</option>
                <option >marieé</option>
                <option >divorcé</option>
               
            </select>
                <label for="f9">etat_civil</label>
            </div>
        </td></tr>
            </table>
           <br>
                
   
            
            <input type="submit" name="save" value="submit" class="btn btn-primary" style="margin-left:250px;">
            
        </form>
        </div>
        </div>
        <div style="border-top:1px solid black;height:28px;transform:translate(0px,-90px);background-color:green;">
            <h5 style="transform:translate(400px,20px);font-size:15px;font-style:italic"></h5>
        </div>
    </div>
    
</body>
</html>