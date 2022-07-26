<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tele de Login</title>
    <link rel="stylesheet/less" type="text/css" href="{{ asset('css/login.less') }}" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>

</head>

<body>


    <div class="wrapper">

        <div class="container">


            <h1>Bem-Vindo <strong> HELPDISK</strong>
            </h1>
            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" placeholder="Seu Email"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                <input type="password" name="password" placeholder="Senha" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <button type="submit" id="login-button">
                    {{ __('Entrar') }}
                </button>
                <p></p>
                <p></p>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </form>
        </div>

        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

</body>

</html>