<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <title>Fútbol Soccer Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e6f7ff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
            color: #004080;
        }

        .login-form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #004080;
        }

        .form-group input {
            padding: 8px;
            border: 1px solid #004080;
            border-radius: 4px;
        }

        .form-group input[type="submit"] {
            background-color: #004080;
            color: #fff;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #00264d;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Fútbol Soccer Login</h2>
        <form class="login-form" action="{{ route('verifyLogin') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Nombre de Usuario:</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback" style="display: block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password">
                @error('password')
                    <div class="invalid-feedback" style="display: block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" value="Iniciar Sesión">
            </div>
        </form>
    </div>

</body>

</html>
