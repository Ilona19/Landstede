<!DOCTYPE html>
<html>

<head>
    <title>Hello world</title>
</head>

<body>
    <h1>Mijn prachtige webpagina!</h1>

    <p>Met een smiley! :)</p>
    <img src="smiley.png" alt="Oeps, mijn afbeelding laad niet..." />
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
        background-color: blue;

    }

    img {
        height: 50px;
        width: auto;
    }

    p {
        margin: 0 10rem;
        color: yellow;
    }
</style>

</html>