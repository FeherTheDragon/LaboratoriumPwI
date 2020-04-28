<!DOCTYPE html>

<html lang="pl">
<head>
    
    <title>34</title>
    <meta charset="utf-8">
    
</head>
<body>
    
    <?php
        
        try
        {
            $conn = new PDO('mysql:host=localhost;dbname=Motoryzacja', 'root', '');
        }
        catch (PDOException $e)
        {
            print "Błąd połączenia z bazą!: " . $e->getMessage() . "<br/>";
            die();
        }

        $zapytanie = 'SELECT * FROM Samochody WHERE id = 1 OR id = 3';
        foreach($conn->query($zapytanie) as $row){
            echo $row['marka']." ".$row['model']." ".$row['pojemnosc']."<br>";
        }
    
    ?>

</body>
</html>