
<style>
  .my-ad-item{
    position: relative;
    
  }

  .pill{
    padding: 5px 10px;
    background-color: teal;
    color: white;
    border-radius: 5px;

  }

  .my-ad-pill{
    position: absolute;
    top: 5px;
    right: 10px;
    font-size: 12px
  }
</style>

<div class="my-ad-item">

  <a style="text-decoration: none" href="{{ route('ad_show', ['slug'=>$ad->slug]) }}">

  @if (Auth::user() == true && empty($canEdit) && $ad->user_id == Auth::user()->id)
  <span class="pill my-ad-pill">Meu anuncio</span>
      
  @endif
    <div class="ad-image-area">

      @if (!empty($canEdit))
          
      <div class="ad-buttons">
        <a href="{{ route('ad_delete', ['id'=>$ad->id]) }}" class="ad-button">
          <img src="/assets/icons/deleteIcon.png" />
        </a>
        <a href="" class="ad-button">
          <img src="/assets/icons/editIcon.png" />
        </a>
      </div>
          
      @endif    
      <div
      class="ad-image"
      style="background-image: url('{{ $ad->images->where('featured',1)->first()->url ?? '/assets/adsImages/basketball.png' }} ')"
      {{-- style="background-image: url('{{ $featuredImage }}')" --}}
    ></div>
    </div>
    <div class="ad-title">{{ $ad->title }}</div>
    <div class="ad-price">R${{number_format($ad->price,2,',', '.')  }}</div>

    </a>
  </div>