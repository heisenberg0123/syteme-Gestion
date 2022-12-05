<html>
    <head></head>
    <body>
        <?php
            include_once 'DataBase.php';

        ?>
        <h1>Insert Materiel</h1>
        <form method="post" action="process.php">
            Type: <br>
            <select name="t">
            <?php

            $result = mysqli_query($conn,"SELECT Libelle_Type FROM type");
            while($row = mysqli_fetch_array($result)) {
                echo "<option>".$row['Libelle_Type']."</option>";
            }
            
            ?>
            </select><br>
            Date<br>
            <input type="date" name="d"/><br>
            Marque<br>
            <input type="text" name="m"/><br>
            CodeBarre: <br>
            <input type="text" name="c"/>
            <br>
            Emplacement<br>
            <select name="em">
                <option >601</option>
                <option >602</option>
                <option >603</option>
                <option >604</option>
                <option >605</option>
                <option >606</option>
                <option >607</option>
                <option >608</option>
                <option >609</option>
            </select><br>
            Service: <br>
            <select name="s">
            <?php

            $result2 = mysqli_query($conn,"SELECT Libelle_Service FROM service");
            while($row2 = mysqli_fetch_array($result2)) {
            echo "<option>".$row2['Libelle_Service']."</option>";
              }
            ?>
            </select><br>
            Division: <br>
            <select name="di">
            <?php

            $result3 = mysqli_query($conn,"SELECT Libelle_division FROM division");
            while($row3 = mysqli_fetch_array($result3)) {
                echo "<option>".$row3['Libelle_division']."</option>";
            }
            
            ?>
            </select><br>
            Utilisateur: <br>
            <select name="u">
            <?php

            $result4 = mysqli_query($conn,"SELECT Nom FROM utilisateur");
            while($row4 = mysqli_fetch_array($result4)) {
            echo "<option>".$row4['Nom']."</option>";
            }

            ?>
            </select><br>
            Etat: <br>
            <select name="e">
            <?php

            $result5 = mysqli_query($conn,"SELECT Libelle_etat FROM etat");
            while($row5 = mysqli_fetch_array($result5)) {
            echo "<option>".$row5['Libelle_etat']."</option>";
            }

            ?>
            </select><br>
            Remarque:<br>
            <textarea name="r" rows="3" cols="80" placeholder="Ecrire un Remarque"></textarea><br><br>
            <input type="submit" name="save" value="submit">
            
        </form>
    </body>
</html>