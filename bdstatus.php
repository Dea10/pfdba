<div class="col-sm-6">
        <div class="container">
          <?php 
            $fp = fopen("bdstatus.txt", "r");
            while (!feof($fp)){
              $linea = fgets($fp);
              echo $linea .'<br>';
            }
            fclose($fp);
          ?>
        </div> <!-- container -->
      </div> <!-- col-sm-6.1 -->
      <div class="col-sm-6">
        <div class="container">
        <?php 
            $fp = fopen("status.txt", "r");
            while (!feof($fp)){
              $linea = fgets($fp);
              echo $linea;
            }
            fclose($fp);
          ?>
        </div> <!-- container -->
      </div> <!-- col-sm-6.2 -->