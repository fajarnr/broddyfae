@extends('layout.main')

@section('container')
<div class="container-show">
    <!-- Menu atas -->

    <h2 class="section-title">Merch</h2>

    <div class="product-container">
        <div class="product-item">
            <img src="https://placebear.com/487/473" alt="LP Orange Clay">
            <div class="product-info">
                <h3>TURNSTILE "NEVER ENOUGH" LP ORANGE CLAY</h3>
            </div>
        </div>
    
        <div class="product-item">
            <img src="https://placebear.com/400/400" alt="CD">
            <div class="product-info">
                <h3>TURNSTILE "NEVER ENOUGH" CD</h3>
                <p class="price">$15.00 USD</p>
            </div>
        </div>
    
        <div class="product-item">
            <img src="https://placebear.com/400/400" alt="Cassette">
            <div class="product-info">
                <h3>TURNSTILE "NEVER ENOUGH" CASSETTE</h3>
                <p class="price">$15.00 USD</p>
            </div>
        </div>
    
        <!-- contoh sold out -->
        <div class="product-item sold-out">
            <span class="badge">Sold out</span>
            <img src="https://placebear.com/400/400" alt="LP Snow">
            <div class="product-info">
                <h3>TURNSTILE "NEVER ENOUGH" LP SNOW</h3>
                <p class="price">$30.00 USD</p>
            </div>
        </div>
    </div>
</div>

@endsection