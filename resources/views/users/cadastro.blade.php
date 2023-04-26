<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastre-se</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/global.css">
</head>
<body>
    <div class="title title-cad">
        <hr>
        <h1> Cadastre-se </h1>
        <hr>
    </div>

    <div class="container">
        
        <div class="form-image">
            <img src="imagens/undraw_shopping_app_flsj.svg" alt="">
        </div>
        <div class="form">
            <form action="{{ route('users.create_user')}}" method="POST">
                @csrf
                <h1 class="logo">Nice <span>Store</span></h1>
                <label for="">Nome</label>
                <input type="text" name="nome" required>
                <label for="">E-mail</label>
                <input type="email" name="email" required>
                <label for="">Senha</label>
                <input type="password" name="password" required>
                <label for="">Confirme sua senha</label>
                <input type="password" name="password2" required>
                <div class="termos-de-uso">
                    <input type="checkbox" name="" id="checkbox-termos" required>
                    <p>Ao criar uma conta, você concorda com os <a href="">termos de usu</a></p>
                </div>
                <input type="submit" value="continuar" class="button-cad">
            
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