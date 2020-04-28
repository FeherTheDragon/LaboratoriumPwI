<!DOCTYPE html>

<html lang="pl">
<head>
    
    <title>31</title>
    <meta charset="utf-8">
    
</head>
<body>
    
    <?php
        
        $plik = 'plik.txt';
    
        $zawartosc = file_get_contents($plik);
        echo $zawartosc;
    
    ?>

</body>
</html>