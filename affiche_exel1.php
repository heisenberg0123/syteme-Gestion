<?php
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachement; filename="Liste_Complet.xls"');

    include_once 'DataBase.php';

    $tbl="<table align='center' border='1' cellspacing='0' cellpadding='0'>
        <tr height='40px'>
        <th align='center'>theme</th>
            <th align='center'>date debut</th>
            <th align='center'>date fin</th>
            <th align='center'>formateur</th>
            <th align='center'>nb heure</th>
            <th align='center'>statut</th>
           
           
        </tr>";

        
        $result = mysqli_query($conn,"SELECT theme,date_debut,date_fin,formateur,nb_heure,statut
            from formations 
          
        ") ;
            while($row = mysqli_fetch_array($result)) {
                $tbl=$tbl. 
               "</td><td>".$row['theme']."</td><td>".$row['date_debut']."</td><td>".$row['date_fin']."</td><td>".$row['formateur']."</td><td>".$row['nb_heure']."</td><td>".$row['statut']."</td></tr>"; 
                
                
            }

                $tbl=$tbl ." </table>";
                print $tbl;
               
             
?>