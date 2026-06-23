<x-layout>
  
  
  
  
  {{-- Header --}}
  <div class="container-fluid articoli">
    <div class="row h-100 justify-content-center">
      
      @if (session()->has('successMessage'))
      <div class="alert alert-success">
        {{ session('successMessage') }}
      </div>
      
      
      @endif     
      
      
      {{-- @dd($articoli) --}}
      <div class="row">
        <h2 class="display-5 text-white text-center text-color">I NOSTRI ARTICOLI</h2>
      </div>
      @foreach ($merchs as $merch )
      
      <div class="col-12 col-md-3">
        <x-cardArticle
        
        title="{{ $merch['title'] }}"
        genres="{{ $merch['genres'] }}"
        articleId="{{ $merch['id'] }}"
        img="{{ $merch['img'] }}"
        
        ></x-cardArticle>
      </div>
      
      @endforeach
    </div>
  </div>
  
</x-layout>