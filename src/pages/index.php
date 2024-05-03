<?php require_once (__DIR__ . "/../services/imports.php") ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.webp">
</head>

<body>
    <?php
    require_once (__DIR__ . "/../services/loader.php");
    require (__DIR__ . "/../components/header.php");
    ?>

    <main class="p-5 flex flex-col gap-5">
        <h1 class="text-2xl text-center py-2"> 🔥 ¡Bienvenido a PokeFull! 🔥 </h1>
        <p>
            ¿Eres un verdadero entrenador Pokémon? Entonces estás en el lugar correcto. En PokeFull, te ofrecemos una
            experiencia única para que puedas sumergirte en el emocionante mundo de los Pokémon. ¿Qué puedes hacer aquí?
            ¡Sigue leyendo!


        <ul class="list-disc list-inside">
            <li class="py-2">📚 Explora la Wiki Pokémon: ¿Necesitas información sobre tu Pokémon favorito? Nuestra Wiki
                está repleta de detalles sobre habilidades, evoluciones, curiosidades y más. ¡Conviértete en un experto
                y sorprende a tus amigos con tus conocimientos!</li>
            <li class="py-2">🃏 Colección de Cartas Pokémon: Si eres un fanático del Juego de Cartas Coleccionables de
                Pokémon (JCC), estás de enhorabuena. En PokeFull, puedes explorar todas las cartas disponibles, desde
                las clásicas hasta las más recientes. ¿Cuál es tu carta favorita? ¡Agrega tus tesoros a tu colección
                virtual!</li>
            <li class="py-2">🗂️ Organiza tu Colección: ¿Tienes una caja llena de cartas Pokémon en casa? No te
                preocupes, en PokeFull puedes crear álbumes virtuales y organizar tus cartas por expansión, rareza o
                tipo. ¡Comparte tu colección con otros entrenadores y presume de tus hallazgos!
                Así que, ¿estás listo para comenzar tu aventura en PokeFull? ¡Únete a nuestra comunidad y descubre todo
                lo que tenemos para ofrecerte! 🌟</li>
        </ul>
        </p>
    </main>

</body>

</html>