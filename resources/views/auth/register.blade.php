<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .register-container {
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

        input, select {
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
            background-color: #28a745;
            color: white;
            padding: 0.6rem 1.2rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Créer un compte</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nom -->
            <label for="name">Nom complet</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror

            <!-- Email -->
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror

            <!-- Mot de passe -->
            <label for="password">Mot de passe</label>
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

            <!-- Rôle -->
            <label for="role">Rôle</label>
            <select name="role" id="role" required>
                <option value="etudiant">Étudiant</option>
                <option value="formateur">Formateur</option>
                <option value="parent">Parent</option>
                <option value="admin">Admin</option>
            </select>
            @error('role')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="actions">
                <a href="{{ route('login') }}">Déjà inscrit ?</a>
                <button type="submit">S'inscrire</button>
            </div>
        </form>
    </div>
</body>
</html>
