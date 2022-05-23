<!-- 
1. Creare una variabile con un paragrafo di testo a vostra scelta.
2. Stampare a schermo il paragrafo e la sua lunghezza.
3. Una parola da censurare viene passata dall'utente tramite parametro GET.
4. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. 
-->
<?php
    $testoIniziale = 'trentatre trentini entrarono a Trento, tutti e trentatre trotterellando';
    if(isset($_GET['var'])){
        $wordChange = $_GET['var'];
    } else{
        $avviso = 'Inserire un valore nel campo di ricerca';
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadwordsPhp</title>
</head>
<body>
    <main>
        <h1>Frase iniziale:</h1>
        <p><?php echo $testoIniziale; ?></p>
        <p><?php echo 'La lunghezza della frase iniziale è '.strlen($testoIniziale); ?></p>
        <h2>Frase modificata:</h2>
        <p><?php echo $testoModificato = str_replace($wordChange, '***', $testoIniziale);?></p>
        <p><?php echo 'La lunghezza della frase modificata è '.strlen($testoModificato); ?></p>
    </main>
</body>
</html>