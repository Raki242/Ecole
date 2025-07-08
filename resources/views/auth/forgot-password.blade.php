<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Réinitialisation du mot de passe - T.T.G Network</title>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f4f6f8;
    margin: 0;
    padding: 0;
    display: flex;
    min-height: 100vh;
    justify-content: center;
    align-items: center;
    color: #333;
  }
  .container {
    background: white;
    max-width: 420px;
    width: 90%;
    padding: 30px 35px;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.1);
  }
  .info-text {
    font-size: 0.95rem;
    color: #555;
    margin-bottom: 25px;
    line-height: 1.5;
  }
  .session-status {
    background-color: #d1fae5;
    color: #065f46;
    padding: 12px 18px;
    border-radius: 8px;
    margin-bottom: 20px;
    font-weight: 600;
    display: none;
  }
  .session-status.show {
    display: block;
  }
  label {
    font-weight: 600;
    font-size: 1rem;
    display: block;
    margin-bottom: 6px;
    color: #111827;
  }
  input[type="email"] {
    width: 100%;
    padding: 12px 15px;
    border: 1.8px solid #d1d5db;
    border-radius: 8px;
    font-size: 1rem;
    outline-offset: 2px;
    transition: border-color 0.3s ease;
  }
  input[type="email"]:focus {
    border-color: #6366f1;
    box-shadow: 0 0 6px #a5b4fc;
  }
  .error-text {
    margin-top: 6px;
    font-size: 0.85rem;
    color: #dc2626;
  }
  .btn-submit {
    margin-top: 28px;
    width: 100%;
    background-color: #4f46e5;
    border: none;
    padding: 14px;
    font-size: 1.1rem;
    font-weight: 700;
    color: white;
    border-radius: 10px;
    cursor: pointer;
    box-shadow: 0 6px 15px rgba(79,70,229,0.4);
    transition: background-color 0.3s ease;
  }
  .btn-submit:hover {
    background-color: #4338ca;
  }
</style>
</head>
<body>

<div class="container">
  <div class="info-text">
    Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
  </div>

  <div id="sessionStatus" class="session-status" role="alert"></div>

  <form method="POST" action="{{ route('password.email') }}" novalidate>
    @csrf

    <label for="email">Email</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" />
    <div class="error-text" id="emailError">
      <!-- Affiche ici les erreurs côté serveur, par ex. via Blade -->
      @if($errors->has('email'))
        {{ $errors->first('email') }}
      @endif
    </div>

    <button type="submit" class="btn-submit">Email Password Reset Link</button>
  </form>
</div>

<script>
  // Exemple simple pour afficher un message de session côté client
  document.addEventListener('DOMContentLoaded', () => {
    const status = `{{ session('status') }}`;
    if(status) {
      const statusDiv = document.getElementById('sessionStatus');
      statusDiv.textContent = status;
      statusDiv.classList.add('show');
    }
  });
</script>

</body>
</html>
