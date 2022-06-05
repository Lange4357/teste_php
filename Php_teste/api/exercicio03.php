<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>exercicio01</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
    <style>
        span.resultado{
            font-weight:bold;
            color: #7e050c;
        }
    </style>
    </head>
    <body>
        <div>
            <?php
                $n= isset($_GET["numero"])?$_GET["numero"]:1;
                $qtd=0;
                echo "Analisando o número $n...<br/>";
                echo "Valores múltiplos: ";

                for($i=1; $i<=$n;$i++){
                    if($n%$i==0){
                        $qtd+=1;
                        echo "$i ";
                    }
                    if($qtd==2){
                        $r= "É PRIMO!";
                    }
                    else {
                        $r= "NÃO É PRIMO!";
                    }
                }    
                echo "<br/>Total de múltiplos: $qtd <br/> Resultado: <span class='resultado'>$n $r</span>";            
            ?><br>
            <a href="javascript:history.go(-1)"><button style="background-color:#09096e;color: antiquewhite;">Voltar</button></a>
            <!--<input type="submit" value="Calcular" style="background-color:#09096e;color:antiquewhite;">-->
        </div>
    </body>
</html>