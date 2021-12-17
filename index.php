<?php 

//dichiarazione paragrafo
$paragrafo = 'Questa mattina Andrea ha iniziato ad imparare backend usando il linguaggio php';

//stampo il paragrafo
echo $paragrafo;

//dichiaro la sua lunghezza
echo strlen($paragrafo);

//esplodo l'array
var_dump(explode(' ', $paragrafo));

//dichiarazione della bad-word
$badword = $_GET['badword'];

//dichiarazione nuova parola
$hidename = '***';

//stampo in pagina con le nuove modifiche
str_replace($badword, $hidename, $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Bad Word</title>
</head>
<body>

  <h1><?php echo $paragrafo ?></h1>
  <h3>Questo paragrafo ha <?php echo strlen($paragrafo); ?> caratteri</h3>
  
  <h1><?php echo str_replace($badword, $hidename, $paragrafo); ?></h1>
  <h3>Questo paragrafo ha <?php echo strlen(str_replace($badword, $hidename, $paragrafo)); ?> caratteri</h3>

  
</body>
</html>