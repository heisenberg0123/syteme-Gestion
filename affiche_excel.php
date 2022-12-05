<?php
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachement; filename="Liste_Complet.xls"');

    include_once 'DataBase.php';

    $tbl="<table align='center' border='1' cellspacing='0' cellpadding='0'>
        <tr height='40px'>
        <th align='center'>matricule</th>
            <th align='center'>nom</th>
            <th align='center'>prenom</th>
            <th align='center'>adresse</th>
            <th align='center'>date de naissance</th>
            <th align='center'>nombre enfants</th>
            <th align='center'>date entrée</th>
            <th align='center'>taille</th>
            <th align='center'>pointure</th>
            <th align='center'>emplacement</th>
            <th align='center'>poste</th>
            <th align='center'>statut</th>
            <th align='center'>Etat civil</th>
           
        </tr>";

        
        $result = mysqli_query($conn,"SELECT m.matricule,t.Libelle_type,m.nom,m.Emplacement,m.Date,e.Libelle_etat,m.prenom,m.adresse,m.taille,m.pointure,m.etat_civil,m.nb_enfants,m.datee
            from employee m,etat e,type t
            where 
            e.Code_etat=m.etat
            AND t.Code_Type=m.Type
        ") ;
            while($row = mysqli_fetch_array($result)) {
                $Date=explode('-',$row['Date']);
                $annee=$Date[0];
	            $mois=$Date[1];
	            $jour=$Date[2];
	            $Date=$jour."/".$mois."/".$annee;
                $datee=explode('-',$row['datee']);
                $anneee=$date[0];
	            $mois=$datee[1];
	            $jouree=$datee[2];
	            $dateee=$joure."/".$moise."/".$anneee;
                $tbl=$tbl. 
                "<tr><td>".$row['matricule']."</td><td>".$row['nom']."</td><td>".$row['prenom']."</td><td>".$row['adresse']."</td><td>".$datee."</td><td>".$row['nb_enfants']."</td><td>".$Date."</td><td>".$row['taille']."</td><td>".$row['pointure']."</td><td>".$row['Libelle_type']."</td><td>".$row['Emplacement']."</td><td>".$row['Libelle_etat']."</td><td>".$row['etat_civil']."</td></tr>";
                
                
            }

                $tbl=$tbl ." </table>";
                print $tbl;
               
             
?>