<?php
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachement; filename="Liste_Complet.xls"');

    include_once 'DataBase.php';

    $tbl="<table align='center' border='1' cellspacing='0' cellpadding='0'>
        <tr height='40px'>
        <th align='center'>nom</th>
            <th align='center'>prenom</th>
            <th align='center'>adresse</th>
            <th align='center'>tel</th>
            <th align='center'>email</th>
            
           
           
        </tr>";

        
        $result = mysqli_query($conn,"SELECT nom,prenom,adresse,tel,email
            from clients
          
        ") ;
            while($row = mysqli_fetch_array($result)) {
                $tbl=$tbl. 
               "</td><td>".$row['nom']."</td><td>".$row['prenom']."</td><td>".$row['adresse']."</td><td>".$row['tel']."</td><td>".$row['email']."</td></tr>"; 
                
                
            }

                $tbl=$tbl ." </table>";
                print $tbl;
               
             
?>