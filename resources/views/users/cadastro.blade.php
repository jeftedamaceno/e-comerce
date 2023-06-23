<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastre-se</title>
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/global.css">
</head>
<body>
    <div class="title title-cad">
        <hr>
        <h1> Cadastre-se </h1>
        <hr>
    </div>

    <div class="container">
        <div class="form-image">
            <img src="/imagens/undraw_shopping_app_flsj.svg" alt="">
        </div>
        <div class="form">
            <form action="{{ route('users.store')}}" method="POST">
                @csrf
                @include('users._partials.form')
                <div class="termos-de-uso">
                    <input type="checkbox" name="" id="checkbox-termos" required>
                    <p>Ao criar uma conta, você concorda com os <a href="">termos de usu</a></p>
                </div>
                <p>
                    Você já tem uma conta?  <a href="{{ route("login") }}">Fazer login</a>
                </p>
            </form>
        </div>
    </div>
    <script>
        var termos = document.querySelector(".checkbox-termos");
    </script>
</body>
</html>