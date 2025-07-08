<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bienvenue - T.T.G Network</title>
    <style>
        /* Fond animé ciel étoilé */
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
            position: relative;
        }

        /* Étoiles */
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: transparent url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="3" height="3"><circle cx="1.5" cy="1.5" r="1.5" fill="white" fill-opacity="0.7"/></svg>') repeat;
            background-size: 50px 50px;
            animation: twinkle 10s linear infinite;
            z-index: 0;
            pointer-events: none;
        }
        @keyframes twinkle {
            0%, 100% {opacity: 1;}
            50% {opacity: 0.5;}
        }

        header, footer {
            max-width: 1200px;
            width: 100%;
            margin: auto;
            padding: 20px 30px;
            position: relative;
            z-index: 10;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(0,0,0,0.25);
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(255,255,255,0.1);
        }

        header h1 {
            font-size: 2rem;
            font-weight: 900;
            letter-spacing: 3px;
            color: #d8d8ff;
            text-shadow: 0 0 10px #8a8aff;
        }

        nav a {
            margin-left: 25px;
            text-decoration: none;
            color: #d8d8ff;
            font-weight: 600;
            font-size: 1rem;
            padding: 8px 15px;
            border-radius: 8px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        nav a:hover {
            background-color: #7e22ce;
            color: #fff;
            box-shadow: 0 0 12px #9f7aea;
        }

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem 1rem;
            position: relative;
            z-index: 5;
        }

        main h2 {
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 20px;
            color: #b8a9ff;
            text-shadow: 0 0 15px #b8a9ffaa;
        }

        main h2 span {
            color: #ff8aae;
            text-shadow: 0 0 15px #ff8aaeaa;
        }

        main p {
            font-size: 1.25rem;
            max-width: 700px;
            line-height: 1.5;
            margin-bottom: 40px;
            color: #dcd6f7;
            text-shadow: 0 0 8px #00000066;
        }

        .btn {
            font-weight: 700;
            font-size: 1.1rem;
            padding: 14px 36px;
            margin: 0 15px;
            border-radius: 30px;
            cursor: pointer;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 6px 15px rgba(126,34,206,0.4);
            text-decoration: none;
            display: inline-block;
            color: white;
        }

        .btn-white {
            background: linear-gradient(135deg, #f9f9f9, #d8d8ff);
            color: #4b3fbd;
            box-shadow: 0 6px 20px rgba(216,216,255,0.6);
        }

        .btn-white:hover {
            background: #fff;
            color: #6e52cc;
            box-shadow: 0 0 25px #b08aff;
            transform: translateY(-3px);
        }

        footer {
            background: rgba(0,0,0,0.3);
            color: #bbb;
            font-size: 0.9rem;
            text-align: center;
            padding: 15px 0;
            position: relative;
            z-index: 10;
            user-select: none;
        }

        /* Animation fade-in simple */
        [data-fade] {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.7s ease-out;
        }
        [data-fade].show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

<header>
    <h1>T.T.G Network</h1>
    <nav>
        <a href="{{ route('register') }}">Créer un compte</a>
        <a href="{{ route('login') }}">Se connecter</a>
    </nav>
</header>

<main>
    <h2 data-fade>Bienvenue sur <span>T.T.G Network</span></h2>
    <p data-fade>
        La plateforme scolaire intelligente qui facilite la gestion des étudiants, cours, notes, enseignants et plus encore.<br/>
        Découvrez un espace pensé pour simplifier votre expérience éducative et favoriser la réussite.
    </p>

    <div data-fade>
        <a href="{{ route('register') }}" class="btn btn-white">Créer un compte</a>
        <a href="{{ route('login') }}" class="btn btn-white">Se connecter</a>
    </div>
</main>

<footer>
    © {{ date('Y') }} <strong>T.T.G Network</strong>. Tous droits réservés.
</footer>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll('[data-fade]').forEach(el => {
            setTimeout(() => el.classList.add('show'), 300);
        });
    });
</script>

</body>
</html>
