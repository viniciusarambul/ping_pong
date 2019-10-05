<!doctype html>
<html>
<head>
    <title>Ping Pong</title>

</head>
<body>

    <div>
        <h1>Ping Pong</h1>

    </div>

    <div class = "content">

        <div>
            <?php
            
                $jogador_a = 0;
                $jogador_b = 0;
                $rodada = 0;
                $saque = 0;
                $saque20_a = 0;
                $saque20_b = 0;
                //jogador tem que chegar a 21 pontos
                //minimo de 2 pontos de diferença do oponente

                while (abs($jogador_a - $jogador_b) < 2 || $jogador_a < 21 && $jogador_b < 21) {
                   $rodada++;
                  
                   echo "<h2>Rodada $rodada</h2>\n";

                   //valores randnomicos entre 0 e 1
                      if(rand(0,1)) 
                     {
                       $jogador_a++;
                       $sacar = 'Jogador A';
                       $sacado = 'Jogador B';
                       $saque_a++;
                     }else {
                       $jogador_b++;
                      
                       $sacar = 'Jogador B';
                       $sacado = 'Jogador A';
                       $saque_b++;
                       
                     }
                     
                    if($jogador_a >= 20 && $jogador_b >= 20){
                    
                      if($sacar == 'Jogador A'){
                          $saque20_a++;
                      }
                      if($sacar == 'Jogador B'){
                        $saque20_b++;
                      }
                      
                      if(($saque20_a % 3) == 0){
                        $sacar = 'Jogador B';
                        $saque_b++;
                      }
                      
                      if(($saque20_b % 3) == 0){
                        $sacar = 'Jogador A';
                        $saque_a++;
                      }
                       
                    }else{
                      
                     if(($rodada % 6) == 0){
                       $sacar = $sacado;
                     }
                    }
                    
                   echo "$jogador_a : $jogador_b -> $sacar ";
                   echo "</div>";
                }
            ?>
        </div>

        <div >
        
     </div>

</body>

</html>
