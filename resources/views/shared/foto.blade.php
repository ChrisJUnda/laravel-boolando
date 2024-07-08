@php
    $hasDiscount = false;
    $price = $product['price'];
    foreach ($product['badges'] as $key => $badge) {
        if ($badge['type'] === 'discount') {
            $hasDiscount = true;
            $price = ($price / 100) * (100 + intval($badge['value']));
            $price = number_format($price, 2, ',', '');
        }
    }
@endphp

<div class="card">
    <div class="position-relative immagine">
        <img class="w-100 front-image" src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}"
            alt="Immagine prodotto">
        <img class="w-100 position-absolute top-0 start-0 hover-image"
            src="{{ Vite::asset('resources/img/' . $product['backImage']) }}" alt="Immagine" class ="mb-0">
        <div class="position-absolute d-flex gap-2 badges-section">
            @foreach (array_reverse($product['badges']) as $badge)
                @include('shared.badge')
            @endforeach
        </div>



    </div>
    <div class="card-body">
        <p class="card-text mb-0 fs-5">
            {{ $product['brand'] }}
        </p>
        <p class="card-text">
            {{ $product['name'] }}
        </p>
        <p class="card-text text-danger">
            <span>
                {{ $price }}&euro;
            </span>
            @if ($hasDiscount)
                <span class="text-dark text-decoration-line-through">
                    {{ $product['price'] }}&euro;
                </span>
            @endif

        </p>
    </div>
</div>
<style scoped>
    .front-image {
        opacity: 1;
        transition: opacity 0.5s;
        position: relative;
        z-index: 2;
    }

    .front-image:hover {
        opacity: 0;
    }

    .badges-section {
        bottom: 20px;
        z-index: 999;
    }
</style>
