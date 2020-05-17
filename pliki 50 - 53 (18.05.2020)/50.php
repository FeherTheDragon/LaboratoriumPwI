<!DOCTYPE html>

<html lang="pl">
<head>
    
    <title>50</title>
    <meta charset="utf-8">
    
</head>
<body>
    
    <form action="51.php" method="get">
        <table>
            <tr>
                <td><label for="imie">Imię: </label></td>
                <td><input type="text" id="imie" name="imie"></td>
            </tr>
            <tr>
                <td><label for="nazwisko">Nazwisko: </label></td>
                <td><input type="text" id="nazwisko" name="nazwisko"></td>
            </tr>
            <tr>
                <td><label for="email">E-mail: </label></td>
                <td><input type="text" id="email" name="email"></td>
            </tr>
            <tr>
                <td><label for="rok">Rok Studiów: </label></td>
                <td>
                    <select id="rok" name="rok">
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
                        
                        $zapytanie1 = 'SELECT * FROM rok';
                        foreach($conn->query($zapytanie1) as $row1){
                            echo "<option value=".$row1['id'].">".$row1['id']." - ".$row1['nazwa']." ".$row1['kierunek']." st.".$row1['stopien']."</option>";
                        }
                        
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Dodaj Studenta"></td>
            </tr>
        </table>
    </form>

</body>
</html>