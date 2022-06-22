 <?php

 $text = 'ho da fare tutto il giorno e non riesco a fare nulla, io sono stanco cazzo, vorrei andare al mare cazzo';

 $censored_word = $_GET["censored"];

 $text_censurato = str_replace($censored_word, "***", $text);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <p><?= $text; ?></p>
   <span><?= strlen($text); ?></span>
   <p><?= $text_censurato; ?></p>
   <p><?= strlen($text_censurato);?></p>
</body>
</html>
