<?php
// dichiaro una variabile e la pongo uguale al valore di $_GET
$badword = $_GET['name'];
// creo un paragrafo
$paragraph = 'Prima regola del Fight Club: non parlate mai del Fight Club.Seconda regola del Fight Club: non dovete parlare mai del Fight Club.Terza regola del Fight Club: se qualcuno si accascia, è spompato, grida basta, fine del combattimento.
Quarta regola del Fight Club: si combatte solo due per volta.Quinta regola del Fight Club: un combattimento alla volta ragazzi.Sesta regola del Fight Club: niente camicia, niente scarpe.
Settima regola del Fight Club: i combattimenti durano per tutto il tempo necessario.Ottava regola ed ultima regola del Fight Club: se questa è la vostra prima sera al Fight Club, dovete combattere.'
 ?>
<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Badwords</title>
   </head>
   <body>
     <h1>
       La parola vietata è:
       <?php
       echo $badword
       ?>

     </h1>

     <h2>
       Questo paragrafo è lungo
       <?php
      echo  strlen($paragraph) . ' ' . 'caratteri'
        ?>
     </h2>

     <h2>
       <?php
       $safe_string = str_replace($badword, '***', $paragraph);
       echo $safe_string
       ?>

     </h2>
   </body>
 </html>
