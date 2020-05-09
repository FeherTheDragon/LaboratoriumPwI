<!DOCTYPE html>

<html lang="pl">
<head>
    
    <title>40</title>
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

        $sql = "INSERT INTO studenci (imie, nazwisko, email, id_rok_studiow) VALUES (?,?,?,?)";
        $conn->prepare($sql)->execute(["Jan", "Nowak", "jnowak@wp.pl", "1"]);
        $conn->prepare($sql)->execute(["Adam", "Kowalski", "akowalski@wp.pl", "2"]);
        $conn->prepare($sql)->execute(["Iwona", "Nowa", "imowa@wp.pl", "2"]);
        $sql2 = "INSERT INTO rok (nazwa, kierunek, stopien) VALUES (?,?,?)";
        $conn->prepare($sql2)->execute(["2018", "Informatyka", "1"]);
        $conn->prepare($sql2)->execute(["2019", "Matematyka", "2"]);
    
    ?>

</body>
</html>