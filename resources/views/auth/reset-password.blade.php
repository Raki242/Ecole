<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réinitialiser le mot de passe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .reset-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
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

        input {
            width: 100%;
            padding: 0.6rem;
            margin-top: 0.3rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .error {
            color: red;
            font-size: 0.85rem;
            margin-top: 0.3rem;
        }

        .actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 1.5rem;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 0.6rem 1.2rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="reset-container">
        <h2>Réinitialiser le mot de passe</h2>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email -->
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror

            <!-- Nouveau mot de passe -->
            <label for="password">Nouveau mot de passe</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror

            <!-- Confirmation -->
            <label for="password_confirmation">Confirmer le mot de passe</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
            @error('password_confirmation')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="actions">
                <button type="submit">Réinitialiser</button>
            </div>
        </form>
    </div>
</body>
</html>
