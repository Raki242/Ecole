<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Vérification d'email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9fafb;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 1rem;
        }
        .container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 100%;
        }
        .message {
            color: #374151;
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        .status {
            color: #166534;
            background-color: #d1fae5;
            padding: 0.75rem 1rem;
            border-radius: 6px;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
        }
        button, .btn-primary {
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1rem;
        }
        button:hover, .btn-primary:hover {
            background-color: #1d4ed8;
        }
        .btn-link {
            background: none;
            border: none;
            color: #4b5563;
            text-decoration: underline;
            cursor: pointer;
            font-size: 0.9rem;
            padding: 0;
        }
        .btn-link:hover {
            color: #111827;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="message">
            Merci pour votre inscription ! Avant de commencer, pourriez-vous vérifier votre adresse email en cliquant sur le lien que nous venons de vous envoyer ? Si vous n'avez pas reçu l'email, nous vous en enverrons volontiers un autre.
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="status">
                Un nouveau lien de vérification a été envoyé à l'adresse email que vous avez fournie lors de l'inscription.
            </div>
        @endif

        <div class="actions">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn-primary">Renvoyer l'email de vérification</button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-link">Se déconnecter</button>
            </form>
        </div>
    </div>
</body>
</html>
