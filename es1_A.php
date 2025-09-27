
<?php
// --- DATI RILEVAZIONE --- 
$localita = $_GET['localita']; 
$data = $_GET['data']; 
$ora = $_GET['ora']; 
$tipo = $_GET['tipo']; 
$umidita = $_GET['umidita']; 
$clima = $_GET['clima']; 
$altitudine = $_GET['altitudine']; 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output rilevazione</title>
</head>
<body>
    <h2>Riepilogo rilevazione</h2> 
    <?php 
        echo "Località: " . $localita . "<br>"; 
        echo "Data: " . $data . "<br>"; 
        echo "Ora: " . $ora . "<br>"; 
        echo "Tipo rilevazione: " . $tipo . "<br>"; 
        echo "Umidità: " . $umidita . "<br>"; 
        echo "Clima attuale: " . $clima . "<br>"; 
        echo "Altitudine: " . $altitudine . " m<br>"; 
    ?>
</body>
</html>

