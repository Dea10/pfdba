        <?php 
            $fp = fopen("status.txt", "r");
            while (!feof($fp)){
              $linea = fgets($fp);
              echo $linea;
            }
            fclose($fp);
          ?>