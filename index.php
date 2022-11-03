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
        </div>
    </div>

    <?php

    $url = "https://economia.awesomeapi.com.br/last/BTC-BRL";

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $result = json_decode(curl_exec($curl), true);

    echo $result["BTCBRL"]["codein"]; exit;
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    ?>
</body>
</html>