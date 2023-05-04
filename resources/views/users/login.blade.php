<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/global.css">
</head>
<body>
    <div class="title">
        <hr>
        <h1> Login </h1>
        <hr>
    </div>
    <div class="container" >
        <div class="form-image">
            <img src="/imagens/undraw_shopping_re_hdd9.svg" alt="">
        </div>
        <div class="form">
            <form action="{{route('users.auth')}}" method="POST">
                @csrf
                <h1 class="logo">Nice <span>Store</span></h1>
                <label for="">E-mail</label>
                @if (session('danger'))
                    <div class="invalid-feedback">
                        <div class="errors">
                            <ul class="errors">
                                <div class="alert alert-danger" role="alert">
                                    <li class="error">{{session('danger')}}</li>
                                </div>
                            </ul>
                        </div>
                    </div>
                @endif
                <input type="email" name="email" @error('email') class="error-input" @enderror>
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
                <input type="password" name="password" @error('password') class="error-input" @enderror>
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
                <input type="submit" value="entrar" class="button-cad">
                <p>
                    Ainda não tem conta?  <a href="{{ route("cadastro_user") }}">cadastre-se</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>