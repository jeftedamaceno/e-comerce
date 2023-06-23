<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/global.css">
</head>
<body>
    <div class="title title-cad">
        <hr>
        <h1> Editar Usuario </h1>
        <hr>
    </div>

    <div class="container">
        <div class="form-image">
            <img src="/imagens/edit.svg" alt="">
        </div>
        <div class="form">
            <form action="{{ route('users.update',auth()->user()->id)}}" method="POST">
                @method('put')
                @include('users._partials.form')
        </div>
    </div>
    <script>
        var termos = document.querySelector(".checkbox-termos");
    </script>
</body>
</html>