@csrf
<h1 class="logo">Nice <span>Store</span></h1>
<label >Nome</label>
<input type="text" name="name" @error('name') class="error-input" @enderror value=" {{$user->name ?? old('name')}}" required>
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
<input type="email" name="email" @error('email') class="error-input" @enderror value="{{$user->email ??  old('email') }}" required>
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
<input type="password" name="password" @error('password') class="error-input" @enderror value="{{old('password_confirmation') }}" required>
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
<input type="password" name="password_confirmation" @error('password_confirmation') class="error-input" @enderror value="{{old('password_confirmation') }}" required>
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

<input type="submit" value="continuar" class="button-cad">
