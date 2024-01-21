<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Open+Sans:ital@0;1&family=Oswald:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/assets/style.css" />
    <link rel="stylesheet" href="/assets/myAccountStyle.css" />

    <title>B7Store</title>
  </head>

  <body>
         <x-header/>
 
         <main>
            <div class="my-account-page">
              <div class="sidebar">
                <div class="sidebar-top">
                  <a href="/myAccount.html" class="config"
                    ><img src="/assets/icons/configIcon.png" /> Configurações</a
                  >
                  <a href="{{ route('my_ads') }}"
                    ><img src="/assets/icons/layersIonGray.png" /> Meus Anúncios</a
                  >
                </div>
                <div class="sidebar-bottom">
                  <a href="{{ route('logout') }}"
                    ><img src="/assets/icons/logoutIcon.png" /> Sair</a
                  >
                </div>
              </div>
              <div class="profile-area">
                <h3 class="profile-title">Meu perfil</h3>
                @if (session('success'))

                <div style="color: green" class="alert alert-succes">
                    {{ session('success') }}
                </div>
                    
                @endif
                <form method="POST" action="{{ route('my_acount_action') }}">
                    @csrf
                  <div class="name-area">
                    <div  class="name-label">Nome</div>
                    <input
                      type="text"
                      name="name"
                      placeholder="Digite o seu nome"
                      value="{{ $user->name }}"
                    />
                  </div>
                  <div class="email-area">
                    <div class="email-label">E-mail</div>
                    <input
                      type="email"
                      name="email"
                      placeholder="Digite o seu e-mail"
                      value="{{ $user->email }}"
                    />
                  </div>
                  {{-- <div class="password-area">
                    <div class="password-label">Senha</div>
                    <div class="password-input-area">
                      <input
                        type="password"
                        placeholder="Digite a sua senha"
                        value="123456789"
                      />
                      <img src="assets/icons/eyeIcon.png" />
                    </div>
                  </div> --}}
                  <div class="state-area">
                    <div class="state-label">Estado</div>
                    <select name="state_id" class="states">
                        <option selected hidden disabled value="">Estado</option>
                        @foreach ($states as $state)
                        <option value="{{ $state->id }}"
                             {{ $state->id == $user->state_id ? 'selected' : '' }}>
                             {{ $state->name }}
                            </option>
                            
                        @endforeach
                        
                      </select>
                  </div>
                  <button type="submit" class="save-button">Salvar</button>
                </form>
              </div>
            </div>
          </main>
   
         <x-footer/>

  </body>
</html>
