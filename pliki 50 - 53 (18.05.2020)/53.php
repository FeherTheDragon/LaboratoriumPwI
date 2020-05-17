<!DOCTYPE html>

<html lang="pl">
<head>
    
    <title>53</title>
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
    
        $sql = 'DELETE FROM studenci WHERE id = :idstudenta';
        $zapytanie = $conn->prepare($sql);
        $zapytanie->execute([
            'idstudenta' => $_GET['idstudenta']
        ]);

    ?>

</body>
</html>