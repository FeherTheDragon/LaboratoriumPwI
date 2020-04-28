<!DOCTYPE html>

<html lang="pl">
<head>
    
    <title>30</title>
    <meta charset="utf-8">
    
</head>
<body>
    
    <?php
        
        $plik = 'plik.txt';
        $witaj = "Hello, World!";
        
        file_put_contents($plik, $witaj);
    
    ?>

</body>
</html>