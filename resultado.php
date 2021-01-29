<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: linear-gradient(to bottom, aquamarine, darkblue);
            background-image: linear-gradient(to right, aquamarine, darkblue);
        }

        header {
            width: 6em;
        }

        header img {
            position: relative;
            left: 20%;
            width: 20em
        }

        form {
            margin-top: 1.5em;
            display: flex;
            flex-wrap: wrap;
            position: relative;
            justify-content: center;
            font-size: 1.1em;
        }

        input {
            margin-top: 1em;
            display: flex;
            flex-wrap: wrap;
            position: relative;
            justify-content: center;
            border-radius: 0.2em;
            height: 30px;
            font-size: 1.2em;
        }

        button {
            border: 0;
            font-family: "Open Sans Condensed", sans-serif;
            font-size: 1.2em;
            width: 100%;
            height: 50px;
            color: #ffff;
            margin-top: 1em;
            margin-left: .2em;
            background-image: linear-gradient(to bottom, aqua, green);
            background-image: linear-gradient(to right, aqua, green);
        }

        button:hover,
        button:focus {
            background-color: #8C1D3D;
        }

        fieldset {
            color: black;
            border-color: blue;
        }

        legend {
            color: black;
            font-size: 1.4em;
            background-image: linear-gradient(to bottom, aquamarine, blue);
            background-image: linear-gradient(to right, aquamarine, blue);
        }
        footer{
            height: 3em;
        }
        h2{
            position: relative;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <img src="images.png">
    </header>
    <section>
        <form method="post" action="">
            <fieldset>
                <legend>Descubra se passou de ano</legend>
                <p> <label>Nome: </label><input type="text" name="nome" required> </p>
                <p> <label>Materia: </label><input type="text" name="materia" required> </p>
                <p> <label>1 Bimestre</label><input type="number" name="b1" required> </p>
                <p> <label>2 Bimestre</label><input type="number" name="b2" required> </p>
                <p> <label>3 Bimestre</label><input type="number" name="b3" required> </p>
                <p> <label>4 Bimestre</label><input type="number" name="b4" required> </p>
                <button>Calcular</button>
            </fieldset>
        </form>
    </section>
    <footer>
    </footer>
    <?php
    $nome = $_POST['nome'];
    $b1 = $_POST['b1'];
    $b2 = $_POST['b2'];
    $b3 = $_POST['b3'];
    $b4 = $_POST['b4'];
    $materia = $_POST['materia'];
    $media = ($b1+$b2+$b3+$b4)/4;
    $resul = $media;
    $resul = round($resul);
    if ($resul >=7) {
    $mensagem = "$nome parabéns você passou!";
    } elseif(($resul >= 4)) {
    $mensagem = "$nome você está de recuperação!";
    } elseif (($resul <4)) {
    $mensagem = "$nome você está reprovado";
    }
    echo "<h2>Estado Atual: <b> $mensagem</b></h2>"
    ?>
</body>

</html>