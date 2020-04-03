<!DOCTYPE html>
<html lang="pl">
<head>
    
    <title>14</title>
    <meta charset="utf-8">
    
</head>
<body>
    
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];

        $suma = $a + $b;
        $roznica = $a - $b;
        $iloczyn = $a * $b;
        if($b == 0) $iloraz = "Dzielenie przez 0";
        else $iloraz = $a / $b;
    
        echo "a = $a; b = $b<br>";
        echo "Suma: $suma<br>";
        echo "Różnica: $roznica<br>";
        echo "Iloczyn: $iloczyn<br>";
        echo "Iloraz: $iloraz<br>";
    ?>
    
</body>
</html>