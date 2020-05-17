<!DOCTYPE html>

<html lang="pl">
<head>
    
    <title>51</title>
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
    
        $sql = 'INSERT INTO studenci (imie, nazwisko, email, id_rok_studiow) VALUES (:imie,:nazwisko,:email,:rok)';
        $zapytanie = $conn->prepare($sql);
        $zapytanie->execute([
            'imie' => $_GET['imie'],
            'nazwisko' => $_GET['nazwisko'],
            'email' => $_GET['email'],
            'rok' => $_GET['rok']
        ]);

    ?>

</body>
</html>