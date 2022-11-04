<?php

        require_once "Request.php";

        $r = new Request;

        $r->setUrl("https://economia.awesomeapi.com.br/last/USD-BRL,EUR-BRL,BTC-BRL");

        $return = $r->requestApi();
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <title>APLICAÇÃO FINANCEIRA - PHP</title>
    <!-- IMPORT BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- IMPORT CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>APLICAÇÃO FINANCEIRA - PHP</h1>
                <h3>COTAÇÃO DAS MOEDAS</h3>
                <p>API UTILIZADA: ECONOMIA AWESOMEAPI</p>
            </div>

            <div class="col-md-5 border">
                <div class="row">
                    <div class="col-md-12 ajuste">
                        <img src="img/free-coin-dollar-icon-2686-thumb.png" class="imagem-moedas" alt="Dolar Americano">
                        <h3><?php echo $return["USDBRL"]["name"] ?></h3>
                        <h4>Cotação hoje: R$ <?php echo number_format($return["USDBRL"]["high"], 2) ?></h4>                        
                        <form action="" method="POST">
                            <input type="text">
                            <button class="button" type="submit">Converter</button>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ajuste">
                        <img src="img/free-euro-coin-icon-2141-thumb.png" class="imagem-moedas" alt="Euro">
                        <h3><?php echo $return["EURBRL"]["name"] ?></h3>
                        <h4>Cotação hoje: R$ <?php echo number_format($return["EURBRL"]["high"], 2)?></h4>

                        <form action="" method="POST">
                            <input type="text">
                            <button class="button" type="submit">Converter</button>
                        </form>
                    </div>

                    <div class="col-md-12 ajuste">
                        <img src="img/free-bitcoin-icon-2207-thumb.png" class="imagem-moedas" alt="BitCoin">
                        <h3><?php echo $return["BTCBRL"]["name"] ?></h3>
                        <h4>Cotação hoje: R$ <?php echo number_format($return["BTCBRL"]["high"], 2)?></h4>

                        <form action="" method="POST">
                            <input type="text">
                            <button class="button" type="submit">Converter</button>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>