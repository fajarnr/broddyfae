@extends('layout.main')

@section('container')
<div class="container-home px-0">
    <div class="logo">BRODDYFAE</div>

    <img src="https://placebear.com/518/518" alt="Album Cover" class="album-cover">

    <div class="song-title">NEVER ENOUGH</div>

    <a href="#" class="btn-listen">LISTEN NOW</a>

    <img src="https://placebear.com/878/1300" alt="Album Cover dua" class="album-cover-dua">

    <a href="#" class="btn-stream">STREAM NOW</a>

    <div class="youtube-wrapper">
        <iframe class="youtube-cover" src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&" frameborder="0" 
        allowfullscreen>
        </iframe>
    </div>

    <div class="grid-container">
        <div class="product-grid">
            <!-- Item 1 -->
            <div class="product-item">
              <img src="https://placebear.com/300/300" alt="Product 1">
              <div class="product-info">
                <p class="title">TURNSTILE "NEVER ENOUGH" LP ORANGE CLAY</p>
                <p class="price">$30.00 USD</p>
              </div>
            </div>
          
            <!-- Item 2 -->
            <div class="product-item">
              <img src="https://placebear.com/300/300" alt="Product 2">
              <div class="product-info">
                <p class="title">TURNSTILE "NEVER ENOUGH" CD</p>
                <p class="price">$15.00 USD</p>
              </div>
            </div>
          
            <!-- Item 3 -->
            <div class="product-item">
              <img src="https://placebear.com/300/300" alt="Product 3">
              <div class="product-info">
                <p class="title">TURNSTILE "NEVER ENOUGH" CASSETTE</p>
                <p class="price">$15.00 USD</p>
              </div>
            </div>

            <!-- Item 1 -->
            <div class="product-item">
                <img src="https://placebear.com/300/300" alt="Product 1">
                <div class="product-info">
                  <p class="title">TURNSTILE "NEVER ENOUGH" LP ORANGE CLAY</p>
                  <p class="price">$30.00 USD</p>
                </div>
              </div>
            
              <!-- Item 2 -->
              <div class="product-item">
                <img src="https://placebear.com/300/300" alt="Product 2">
                <div class="product-info">
                  <p class="title">TURNSTILE "NEVER ENOUGH" CD</p>
                  <p class="price">$15.00 USD</p>
                </div>
              </div>
            
              <!-- Item 3 -->
              <div class="product-item">
                <img src="https://placebear.com/300/300" alt="Product 3">
                <div class="product-info">
                  <p class="title">TURNSTILE "NEVER ENOUGH" CASSETTE</p>
                  <p class="price">$15.00 USD</p>
                </div>
              </div>
          
            <!-- Tambah produk lainnya... -->
        </div>
    </div> 

    <a href="#" class="btn-stream">view all</a>

    <div class="tour-container">

        <div class="tour-item">
          <div class="tour-left">
            <strong>SEP 15, 2025</strong><br>
            <span>The Pinnacle</span><br>
            <small>w/ Speed and Jane Remover</small>
          </div>
          
          <div class="tour-center">
            <span class="tour-location">JAKARTA</span>
          </div>
          
          <div class="tour-right">
            <a href="#" class="btn-ticket">BUY TICKET</a>
          </div>
        </div>
      
        <div class="tour-item">
          <div class="tour-left">
            <strong>SEP 20, 2025</strong><br>
            <span>National Stadium</span><br>
            <small>w/ Turnstile</small>
          </div>
          
          <div class="tour-center">
            <span class="tour-location">BANDUNG</span>
          </div>
          
          <div class="tour-right">
            <a href="#" class="btn-ticket">BUY TICKET</a>
          </div>
        </div>
      
        <div class="tour-item">
          <div class="tour-left">
            <strong>SEP 25, 2025</strong><br>
            <span>Beach Arena</span><br>
            <small>w/ Speed and Jane Remover</small>
          </div>
          
          <div class="tour-center">
            <span class="tour-location">SURABAYA</span>
          </div>
          
          <div class="tour-right">
            <a href="#" class="btn-ticket">BUY TICKET</a>
          </div>
        </div>
      
    </div>
      
      
      
</div>

@endsection