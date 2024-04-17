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

    <!-- cdn font awesone -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' integrity='sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <!-- /cdn font awesone -->

    <!-- link css -->
    <link href='./assets/css/style.css' rel='stylesheet'>
</head>

<body>


    <div id='app'>

        <!-- site header -->
        <header id="site_header" class="py-3">
            <div class="container-fluid">
                <img src="./assets/img/Spotify_logo_without_text.svg.webp" alt="">
            </div>
        </header>
        <!-- /site header -->

        <!-- /#site_main -->
        <main id="site_main" class="w-100">
            <div class="container py-5">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4">

                    <!-- loop for ever dischi -->
                    <div class="col" v-for="disco in dischi">

                        <!-- event get disco ciclked  -->
                        <div class="card card_bg rounded-3" @click="discoInfo(disco)">
                            <div class="container_img py-3 px-5">
                                <!-- get value of the key 'poster' for ever disco -->
                                <img class="card-img-top" :src="disco.poster" alt="Title" />
                            </div>
                            <div class="card-body text-center text-light">
                                <!-- get value of the key 'title' for ever disco -->
                                <h4 class="card-title">{{disco.title}}</h4>
                                <!-- get value of the key 'author' for ever disco -->
                                <p class="card-text">{{disco.author}}</p>
                                <!-- get value of the key 'year' for ever disco -->
                                <h4 class="card-title">{{disco.year}}</h4>

                            </div>
                        </div>
                    </div>
                    <!-- loop for ever dischi -->

                </div>
            </div>

        </main>
        <!-- /#site_main -->

        <!-- modal  if show when display is true-->
        <div class="modal-es" v-show="display">
            <!-- button clicked change value bool of display -->
            <button type="button" class="btn_close_modal" aria-label="Close" @click="display = !display">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="container d-flex align-items-center justify-content-center h-100">
                <div class="container_card">
                    <!-- get value of the key 'poster' for ever disco -->
                    <img :src="discoActive.poster" alt="">
                    <!-- get value of the key 'title' for ever disco -->
                    <h4 class="card-title">{{discoActive.title}}</h4>
                    <!-- get value of the key 'author' for ever disco -->
                    <p class="card-text">{{discoActive.author}}</p>
                    <!-- get value of the key 'year' for ever disco -->
                    <h4 class="card-title">{{discoActive.year}}</h4>

                </div>
            </div>
        </div>
    </div>
    <!-- modal -->

    </div>


    <!-- Development only cdn, import axios-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <!-- import vue3 -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <!-- link js -->
    <script src='./assets/js/app.js'></script>
</body>

</html>