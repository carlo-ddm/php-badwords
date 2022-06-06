<?php
/*
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/
var_dump($_GET);
$text = 'Amo la mia città. A volte però ci si rompe le scatole ;P';
$censored_word = $_GET['word'];
$text2 = str_replace($censored_word,'***',$text); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP ex-1</title>
</head>
<body>
  <h1>Ciao!</h1>
  <p><?php echo $text2 ?></p>
  <br>
  <p><?php echo 'La lunghezza del paragrafo è di ' . strlen($text) . ' caratteri'?></p>
  <br>
  <p><?php echo $text ?></p>
  <br>
  <p><?php echo 'La lunghezza del paragrafo è di ' . strlen($text2) . ' caratteri'?></p>

</body>
</html>