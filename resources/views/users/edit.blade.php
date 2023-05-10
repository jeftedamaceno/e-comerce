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
            <img src="/imagens/undraw_shopping_app_flsj.svg" alt="">
        </div>
        <div class="form">
            <form action="{{ route('users.update',auth()->user()->id)}}" method="POST">
                @method('put')
                @csrf
                <h1 class="logo">Nice <span>Store</span></h1>
                <label >Nome</label>
                <input type="text" name="name" @error('name') class="error-input" @enderror value="{{$user->name}}" required>
                @error('name')
                    <div class="invalid-feedback">
                        <div class="errors">
                            <ul class="errors">
                                <div class="alert alert-danger" role="alert">
                                    <li class="error">{{$message}}</li>
                                </div>
                            </ul>
                        </div>
                    </div>
                @enderror
                <label for="">E-mail</label>
                <input type="email" name="email" @error('email') class="error-input" @enderror value="{{$user->email}}" required>
                @error('email')
                    <div class="invalid-feedback">
                        <div class="errors">
                            <ul class="errors">
                                <div class="alert alert-danger" role="alert">
                                    <li class="error">{{$message}}</li>
                                </div>
                            </ul>
                        </div>
                    </div>
                @enderror
                <label for="">Senha</label>
                <input type="password" name="password" @error('password') class="error-input" @enderror value="">
                @error('password')
                    <div class="invalid-feedback">
                        <div class="errors">
                            <ul class="errors">
                                <div class="alert alert-danger" role="alert">
                                    <li class="error">{{$message}}</li>
                                </div>
                            </ul>
                        </div>
                    </div>
                @enderror
                <label for="">Confirme sua senha</label>
                <input type="password" name="password_confirmation" @error('password_confirmation') class="error-input" @enderror value="">
                @error('password_confirmation')
                    <div class="invalid-feedback">
                        <div class="errors">
                            <ul class="errors">
                                <div class="alert alert-danger" role="alert">
                                    <li class="error">{{$message}}</li>
                                </div>
                            </ul>
                        </div>
                    </div>
                @enderror
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