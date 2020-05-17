<!DOCTYPE html>

<html lang="pl">
<head>
    
    <title>52</title>
    <meta charset="utf-8">
    
</head>
<body>
    
    <form action="53.php" method="get">
        <select id="idstudenta" name="idstudenta">
        <?php

            try
            {
                $conn = new PDO('mysql:host=localhost;dbname=Uczelnia', 'root', '');
            }
            catch (PDOException $e)
            {
                print "Błąd połączenia z bazą!: " . $e->getMessage() . "<br/>";
                die();
            }

            $zapytanie1 = 'SELECT * FROM studenci';
            foreach($conn->query($zapytanie1) as $row1){
                echo "<option value=".$row1['id'].">".$row1['imie']." ".$row1['nazwisko']."</option>";
            }

        ?>
        </select>
        <input type="submit" value="Usuń Studenta">
    </form>

</body>
</html>