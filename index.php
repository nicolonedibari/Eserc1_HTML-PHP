<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $localita = $_POST['localita'];
    $data = $_POST['data'];
    $ora = $_POST['ora'];
    $temp_rilevazione = $_POST['temp_rilevazione'];
    $umidita = $_POST['umidita'];
    $clima = $_POST['clima'];
    $altitudine = isset($_POST['altitudine']) && $_POST['altitudine'] !== '' 
        ? $_POST['altitudine'] 
        : 'Non specificato';
        
echo "<!DOCTYPE html>
    <html lang='it'>
    <head>
        <meta charset='UTF-8'>
        <title>Dati Rilevati</title>
    </head>
    <body>
        <h1>Dati Rilevati</h1>
        <p><strong>Località:</strong> $localita</p>
        <p><strong>Data:</strong> $data</p>
        <p><strong>Ora:</strong> $ora</p>
        <p><strong>Temperatura Rilevata:</strong> $temp_rilevazione °C</p>
        <p><strong>Umidità:</strong> $umidita</p>
        <p><strong>Clima Attuale:</strong> $clima</p>
        <p><strong>Altitudine:</strong> $altitudine m</p>
        <br>
        <a href='form.html'>Torna al modulo</a>
    </body>
    </html>";
} else {
    echo "<p>Nessun dato inviato. Torna al <a href='form.html'>modulo</a>.</p>";
}
?>

