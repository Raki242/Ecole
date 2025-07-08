<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-top: 1rem;
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.6rem;
            margin-top: 0.3rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .checkbox-label input {
            margin-right: 0.5rem;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.5rem;
        }

        .actions a {
            font-size: 0.9rem;
            color: #007bff;
            text-decoration: none;
        }

        .actions a:hover {
            text-decoration: underline;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 0.6rem 1.2rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .error {
            color: red;
            font-size: 0.85rem;
            margin-top: 0.3rem;
        }

        .status {
            background-color: #d4edda;
            color: #155724;
            padding: 0.5rem;
            border-radius: 5px;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Connexion</h2>

        @if (session('status'))
            <div class="status">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="password">Mot de passe</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="checkbox-label">
                <input type="checkbox" name="remember" id="remember_me">
                <label for="remember_me">Se souvenir de moi</label>
            </div>

            <div class="actions">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                @endif

                <button type="submit">Se connecter</button>
            </div>
        </form>
    </div>
</body>
</html>
