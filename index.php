<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza,
dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
-->

<?php 
// Codice in Php
//1. Creo variabile con paragrafo di testo
$my_text = "Io sono un testo piccino picciò che apparirà a schermo, perdincibacco!";

//3. Creo variabile che conterrà la parola passata dall'utente che sarà censurata
$user_word = $_GET['user_word'];
var_dump($user_word);

//4. Censuriamo la porzione di testo che contiene la parola inserita
$censor_text = str_replace($user_word, '***', $my_text);
var_dump($censor_text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <!-- MarkUp -->
    <h1 style='text-align: center; color: cornflowerblue; font-size: 50px'>Badwords</h1>
    <!-- 2. Stampo a schermo il testo e la sua lunghezza -->
    <p style='text-align: center; font-size: 20px; color: red; font-weight: 500'>Questo è il mio testo: "<?php echo $my_text; ?>" ed ha una lunghezza di: "<?php echo strlen($my_text); ?>" lettere </p>
    <!-- 5. Stampo a schermo la barola bannata, il testo censurato e la sua lunghezza -->
    <p style='text-align: center; font-size: 20px;'>La parola bannata è : <span style='color: red; font-weight: 600'>"<?php echo $user_word; ?>"</span> </p>
    <p style='text-align: center; font-size: 20px; color: green; font-weight: 500'>Questo è il mio testo family friendly: "<?php echo $censor_text ?>" ed ha una lunghezza di: "<?php echo strlen($censor_text); ?>" lettere </p>

</body>
</html>