<!DOCTYPE html>
<html lang="pl">
<head>
    
    <title>10</title>
    <meta charset="utf-8">
    
</head>
<body>
    
    <?php
        // Pętla for
        for ($i = 1; $i <= 15; $i++) {
            echo "$i ";
        }

        echo "<br>";

        // Pętla foreach
        $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12 ,13, 14, 15);
        foreach ($arr as &$value) {
            echo "$value ";
        }

        echo "<br>";

        // Pętla while
        $i = 1;
        while($i <= 15) {
            echo "$i ";
            $i++;
    }
    ?>
    
</body>
</html>