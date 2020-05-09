<!DOCTYPE html>

<html lang="pl">
<head>
    
    <title>41</title>
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

        $sql = "UPDATE studenci SET nazwisko=? WHERE id = 3";
        $conn->prepare($sql)->execute(["Malinowska"]);
    
    ?>

</body>
</html>