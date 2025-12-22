<?php
$imageUrl = "https://i.pinimg.com/564x/9a/e6/00/9ae600096c53c274db368199f8a58871.jpg";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Protesto</title>
    <style>
        body {
            margin: 0;
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            position: relative;
            display: inline-block;
        }

        .container img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .texto {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 48px;
            font-weight: bold;
            text-align: center;
            text-shadow: 3px 3px 8px black;
            padding: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="<?php echo $imageUrl; ?>" alt="Imagem do protesto">
        <div class="texto">
            Defaced by dreamy9x9x/gato_mp9,<br>
            FORA DARKNESXZ SKIDDER E PANELEIRO
        </div>
    </div>
</body>
</html>
