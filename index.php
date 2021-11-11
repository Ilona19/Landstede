<!DOCTYPE html>
<html>

<head>
    <title>Prachtige website</title>
</head>

<body>
    <h1>Mijn allereerste webpagina!</h1>
    <p>Hello world</p>
    <img src="https://github.com/fluidicon.png" alt="Huh mijn afbeelding laad niet..." />
    <?php
    echo "<p>";

    for ($i = 1; $i <= 100; $i++) {
        echo "$i ";
    }

    echo "</p>";
    ?>


</body>

<style>
    * {
        text-align: center;
    }

    p {
        margin: 0 10rem;
    }
</style>

</html>