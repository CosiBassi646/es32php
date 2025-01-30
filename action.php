<?php
    session_start();
    if (isset( $_SESSION['punteggiUtenti'])) {
        // se la combinazione del computer è settata  
        } else {
            $_SESSION['punteggiUtenti'] = array();
        }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina di riepilogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Il tuo punteggio:</h1>
    
    <?php
        $nomeGioco = $_GET['nomeGioco'];
        $punteggio = $_GET['punteggio'];
        $infoUtente = array($nomeGioco, $punteggio);
        $infoUtenti = $_SESSION['punteggiUtenti'];
        array_push($infoUtenti, $infoUtente);
        $_SESSION['punteggiUtenti'] = $infoUtenti;

    ?>
     <div class="w-50 mx-auto my-auto text-center">
          <table class="table text-center table-bordered">
              <tr>
                  <th>videogiocho:</th>
                  <th>Punteggio:</th>
              </tr>
                <tr>
              <?php
                echo"<td> $nomeGioco</td>";
                echo"<td>$punteggio</td>";
              ?>
              </tr>
          </table>
          <h3>Visualizza tutti i videogiochi con i relativi punteggi massimi: </h3>
          <p><a class="link-opacity-75" href="./riepilogo.php">Vai al riepilogo</a></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>