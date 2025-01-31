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
  <body class="bg-light-subtle">
    <h1 class="text-danger text-center">PAGINA DEI PUNTEGGI</h1>
    <hr>
    <br>
    <?php
        $nomeGioco = $_GET['nomeGioco'];
        $punteggio = $_GET['punteggio'];
        if (isset($_SESSION['punteggiUtenti'][$nomeGioco])) {
          $_SESSION['punteggiUtenti'][$nomeGioco] = max($_SESSION['punteggiUtenti'][$nomeGioco], $punteggio);
        }else{
          $_SESSION['punteggiUtenti'][$nomeGioco] = $punteggio;
        }
    ?>
     <div class="w-50 mx-auto my-auto text-center">
                <div class="container text-center">
                  <div class="row">
                    <div class="col">
                      <h1>-Videogioco-</h1>
                    </div>
                    <div class="col">
                      <h1>-Punteggio-</h1>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col"> 
                  <ul class="list-group">
                    <?php //
                      foreach ($_SESSION['punteggiUtenti'] as $gioco => $punteggio) {  
                        echo '<li class="list-group-item">';
                        echo $gioco; // Stampa Gioco
                        echo '</li>';
                      } 
                    ?>
                  </div>
                  <div class="col">
                  <ul class="list-group">
                    <?php
                      foreach ($_SESSION['punteggiUtenti'] as $gioco => $punteggio) {  
                        echo '<li class="list-group-item">';
                        echo $punteggio; // Stampa  Punteggio
                        echo '</li>';
                      } 
                    ?>
                  </div>
                </div>
              </div>
              </ul>
              <br>
          <div class="w-25 mx-auto my-auto text-center bg-white border">
            <h3 class="text-danger mt-2">Vai al riepilogo: </h3>
            <button class="btn btn-success mb-2"><a class="link-light link-underline-opacity-0" href="./riepilogo.php">Vai al riepilogo</a></button>
          </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>