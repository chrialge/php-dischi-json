<?php

// $file = file_get_contents('disci.json');
// var_dump($file);
// $json_string = json_decode($file);
// var_dump($json_string);
?>

<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- /cdn bootstrap -->
    <title>Document</title>
    <link href='./assets/css/style.css' rel='stylesheet'>
</head>

<body>
    <div id='app'>
        <ul v-for="disco in dischi">
            <li>{{disco.title}}</li>
            <li>{{disco.author}}</li>
            <li>{{disco.year}}</li>
            <li>{{disco.poster}}</li>
            <li>{{disco.genre}}</li>
        </ul>
    </div>


    <!-- Development only cdn, disable in production -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src='./assets/js/app.js'></script>
</body>

</html>