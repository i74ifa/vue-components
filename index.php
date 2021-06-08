<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./dist/app.js" defer></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div id="app">
        <div class="container mt-5">
            <x-button onclick="app()" class="btn-primary rounded bg-dark" data-bs-toggle="modal" data-bs-target="#modal">Bom</x-button>
            <!-- Button trigger modal -->

            <x-modal id="modal" title="title modal" btn_title="Success" btn_close="اغلاق">
                this is the body
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