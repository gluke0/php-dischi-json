<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <title> PHP Dischi JSON </title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

    <link rel="stylesheet" href="./style.css">
</head>
<body>

<div id="app">
    
    <header>
        <div class="container p-3">
            <div class="row">
                <div class="col">
                   <img class="icon" src="./img/Spotify_icon.png" alt="Spotify Logo">
                </div>
            </div>
        </div>
    </header>

    <main class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-4 g-5" v-for="item in disk">
                    <div class="disk text-white text-center" @click="openDisk">
                        <img class="img-fluid mb-4" :src="item.poster" alt="Poster" >
                        <h2 class="mb-3"> {{ item.title }} </h2>
                        <h3 class="mb-3"> {{ item.author }} </h3>
                        <span class="mb-3"> {{ item.year}} </span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</div>
    
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js' integrity='sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==' crossorigin='anonymous'></script>
<script src="main.js"></script>
</body>
</html>