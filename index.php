<?php $appName = 'app Component' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./public/js/app.js" defer></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div id="app">
        <x-navbar brand="<?= $appName ?>" classes="navbar-dark bg-dark">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" aria-current="page" href="#">Home</a>
            <a class="nav-link" aria-current="page" href="#">app</a>
            <a class="nav-link" aria-current="page" href="#">names</a>
            <a class="nav-link" aria-current="page" href="#">current</a>
            <a class="nav-link" aria-current="page" href="#">currency</a>
            <a class="nav-link" aria-current="page" href="#">none</a>
        </x-navbar>
        <div class="container mt-5">
            <x-button onclick="app()" class="btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#modal">
                Bom Modal</x-button>
            <!-- Button trigger modal -->

            <x-modal id="modal" title="title modal" btn_title="Success" btn_close="اغلاق">
                this is the body
                <h1>Hi there</h1>
                <h4><?= $appName ?></h4>
            </x-modal>

        </div>
    </div>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        function app() {
            console.log('this is the name');
        }
    </script>
</body>

</html>