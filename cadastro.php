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
    </style>
</head>

<body>
    <header>
        <img src="images.png">
    </header>
    <section>
        <form method="post" action="">
            <fieldset>
                <legend>Descubrindo seu IMC</legend>
                <p> <label>Nome: </label><input type="text" name="nome" required></p>
                <p> <label>Peso (Kg): </label> <input type="text" size="20" name="peso" required /> </p>
                <p> <label>Altura (cm): </label> <input type="text" size="20" name="altura" required /> </p>
                <button>Calcular</button>
            </fieldset>
        </form>
    </section>
    <?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$tamanho = ($altura*$altura);
$massa = $peso / $altura;
$nome = $_POST['nome'];
if ($massa < 19) {
    echo "Você está Magro";
} elseif (($massa = 20) and ($massa < 24)) {
    echo "Você está no pesso Ideal";
} elseif (($massa = 25)){
    echo "Você está acima do peso.";
} elseif (($massa = 30)){
    echo "Você está Obeso";
}
echo "<h3>$nome seu IMC se encontra em: $massa </h3>";
?>
</body>

</html>