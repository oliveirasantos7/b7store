<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/loginSignUpStyle.css" />

    <title>B7Store - Selecione seu estado</title>
  </head>

  <body>
    <a href="index.html" class="back-button">← Voltar</a>
    <div class="login-page">
      <div class="login-area">
        <h3 class="login-title">B7Store</h3>
        <div class="text-login">
          selecione um estado
        </div>

        <form method="post" action="{{ route('stateAction') }}">
          @csrf

          <select name="state" class="states-select">
            <option selected hidden disabled value="">Estado</option>
            @foreach ($states as $state)
            <option value="{{ $state->id }}">{{ $state->name }}</option>
                
            @endforeach
            
          </select>
          
          
          <button class="login-button">Selecionar</button>
        </form>
        
      </div>
      <div class="terms">
        Ao continuar, você concorda com os <a href="">Termos de Uso</a> e a
        <a href="">Política de Privacidade</a>, e também, em receber
        comunicações via e-mail e push de todos os nossos parceiros.
      </div>
    </div>
    <x-footer/>
    
  </body>
</html>
