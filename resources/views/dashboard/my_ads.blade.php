<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/style.css" />
    <link rel="stylesheet" href="/assets/myAccountStyle.css" />
    <link rel="stylesheet" href="/assets/myAdsStyle.css" />

    <title>B7Store - Meus anúncios</title>
  </head>

  <body>
    <x-header/>

    
    <main>
      <div class="my-ads-page">
        <div class="sidebar">
          <div class="sidebar-top">
            <a href="/myAccount.html" class="config-myAds"
              ><img src="/assets/icons/configIconGray.png" /> Configurações</a
            >
            <a href="/myAds.html" class="myAds-button"
              ><img src="/assets/icons/layersIcon.png" /> Meus Anúncios</a
            >
          </div>
          <div class="sidebar-bottom">
            <a href="/index.html"
              ><img src="/assets/icons/logoutIcon.png" /> Sair</a
            >
          </div>
        </div>
        <div class="myAds-area">
          @if (session('success'))

          <div style="color: green" class="alert alert-succes">
              {{ session('success') }}
          </div>
              
          @endif
          <h3 class="myAds-title">Meus Anúncios</h3>
        
          <div class="myAds-ads-area">

            @if ($advertises->count() > 0)

            

            @foreach ($advertises as $ad)
            <x-basic-ad :ad="$ad" canEdit="true" />
            @endforeach

            @else

            <span>Voçê ainda não possui anuncios</span>
                
            @endif

           

            
           
             
            </div>
          </div>
        </div>
      </div>
    </main>
    <x-footer/>

    
  </body>
</html>
