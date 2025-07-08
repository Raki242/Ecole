<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Confirmer le mot de passe - T.T.G Network</title>
<style>
  body {
    margin: 0; padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #667eea, #764ba2);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #f3f4f6;
  }
  .container {
    background: rgba(255,255,255,0.1);
    padding: 30px 40px;
    border-radius: 16px;
    box-shadow: 0 16px 32px rgba(0,0,0,0.3);
    width: 100%;
    max-width: 420px;
    backdrop-filter: blur(12px);
  }
  .info-text {
    font-size: 1rem;
    margin-bottom: 30px;
    line-height: 1.5;
    color: #e0e7ff;
  }
  label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #c7d2fe;
  }
  input[type="password"] {
    width: 100%;
    padding: 12px 14px;
    border-radius: 10px;
    border: 1.5px solid #a5b4fc;
    background-color: #f8fafc20;
    color: #fefefe;
    font-size: 1rem;
    outline-offset: 2px;
    transition: border-color 0.3s ease;
  }
  input[type="password"]:focus {
    border-color: #6366f1;
    background-color: #f8fafc40;
    box-shadow: 0 0 8px #a5b4fcaa;
  }
  .error-text {
    margin-top: 6px;
    color: #f87171;
    font-size: 0.85rem;
  }
  .btn-confirm {
    margin-top: 30px;
    width: 100%;
    padding: 14px;
    font-weight: 700;
    font-size: 1.1rem;
    color: #4f46e5;
    background-color: #e0e7ff;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    box-shadow: 0 6px 14px rgba(99,102,241,0.5);
    transition: background-color 0.3s ease, color 0.3s ease;
  }
  .btn-confirm:hover {
    background-color: #c7d2fe;
    color: #312e81;
  }
  form {
    width: 100%;
  }
</style>
</head>
<body>

<div class="container" role="main">
  <div class="info-text">
    This is a secure area of the application. Please confirm your password before continuing.
  </div>

  <form method="POST" action="{{ route('password.confirm') }}">
    @csrf

    <label for="password">Password</label>
    <input
      id="password"
      type="password"
      name="password"
      required
      autocomplete="current-password"
      aria-describedby="passwordError"
    />
    <div class="error-text" id="passwordError">
      @if($errors->has('password'))
        {{ $errors->first('password') }}
      @endif
    </div>

    <button type="submit" class="btn-confirm">Confirm</button>
  </form>
</div>

</body>
</html>
