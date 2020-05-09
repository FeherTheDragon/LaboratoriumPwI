<!DOCTYPE html>

<html lang="pl">
<head>
    
    <title>43</title>
    <meta charset="utf-8">
    
</head>
<body>
    
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

        echo "<table>";
        $zapytanie1 = 'SELECT * FROM studenci';
        foreach($conn->query($zapytanie1) as $row1){
            
            $zapytanie2 = $conn->prepare('SELECT * FROM rok WHERE id = ' . $row1['id_rok_studiow']);
            $zapytanie2->execute();
            $row2 = $zapytanie2->fetch();
            
            echo "<tr>";
                echo "<td>" . $row1['imie'] . "</td>";
                echo "<td>" . $row1['nazwisko'] . "</td>";
                echo "<td>" . $row2['kierunek'] . "</td>";
                echo "<td>" . $row2['stopien'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    
    ?>

</body>
</html>