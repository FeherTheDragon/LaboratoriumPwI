<!DOCTYPE html>
<html lang="pl">
<head>
    
    <title>12</title>
    <meta charset="utf-8">
    
</head>
<body>
    
    <?php
        $a = $_GET['a'];
        $b = $_GET['b'];

        if($a == null) echo "Nie wpisano liczby a";
        else if($b == null) echo "Nie wpisano liczby b";
        else{
            echo "a: $a<br>";
            echo "b: $b";
        }
    ?>
    
</body>
</html>