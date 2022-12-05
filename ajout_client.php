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
    <div style="width:1840px;height: 950px;border:1px solid black;" >
        <div style="height:90px;border-bottom:1px solid black">
        <a href="ParcInfo.php"><img src="logoo.png" style="width:100px; height:90px;float:left" class="logo"></a>
            <h2 style="text-align:center;margin-top:30px;">SOFIMA BASE DONNÉ</h2>
        </div>
        <div style="height:180px;border-bottom:1px solid black">
        <div style="width: 140px;height:150px;">
            <div class="gallery" style="margin-left:833px ;">
  
            <a href="gestion1.php"><img src="Gestion.jpg" alt="Gestion" style="width:100px;">  

                <div class="desc">Gestion</div></a>
            </div>

          
        </div>
        <div style="margin-top:180px; margin-left:200px;" class="insert">
        <?php
            include_once 'DataBase.php';

        ?>
        <h1 style="text-align:center; margin-left:333px;">Ajout une client</h1><br>
        <div class="container">
        <form method="post" action="process2.php">
            <table>
            <tr> 
                <td>
                     <div class="form-floating "> 
            <input type="text" name="n" class="form-control" style="width:300px" id="f3" placeholder="nom"/><label for="f3">nom</div></td>
                <td> 
                <div class="form-floating "> 
            <input type="text" name="p" class="form-control" style="width:300px" id="f4" placeholder="prenom"/><label for="f4">prenom</div></td> </tr> 



            <tr> 
                <td>
                     <div class="form-floating "> 
            <input type="text" name="a" class="form-control" style="width:300px" id="f5" placeholder="adresse"/><label for="f5">adresse</div></td>
            <td> 
                <div class="form-floating "> 
            <input type="text" name="e" class="form-control" style="width:300px" id="f6" placeholder="email"/><label for="f6">email</div></td>
            </tr>
            <tr>
                <td>
                <div class="form-floating "> 
            <input type="text" name="t" class="form-control" style="width:300px" id="f7" placeholder="tel"/><label for="f3">tel</div>
                </td>
               
            </tr>
               


                    
            
            
            
            
            </table>
           <br>
                
   
            
            <input type="submit" name="save" value="submit" class="btn btn-primary" style="margin-left:250px;">
            
        </form></div>
        </div>
        </div>
        <div style="border-top:1px solid black;height:80px;transform:translate(0px,570px);background-color:green;">
            <h5 style="transform:translate(400px,20px);font-size:15px;font-style:italic"></h5>
        </div>
    </div>
    
</body>
</html>