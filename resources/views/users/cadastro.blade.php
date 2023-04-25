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
    <div class="title">
        <h1> Cadastre-se </h1>
    </div>
    <div class="container">
        
        <div class="form-image">
            <img src="imagens/undraw_shopping_app_flsj.svg" alt="">
        </div>
        <div class="form">
            <form action="post">
                <h1 class="logo">Nice <span>Store</span></h1>
                <label for="">Nome</label>
                <input type="text" name="">
                <label for="">E-mail</label>
                <input type="e-mail" name="">
                <label for="">Senha</label>
                <input type="password" name="">
                <label for="">Confirme sua senha</label>
                <input type="password" name="">
                <div class="termos-de-uso">
                    <input type="checkbox" name="" id="checkbox-termos">
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