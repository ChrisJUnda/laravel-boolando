{{-- <div class="container ">
    <div class="row justify-content-center text-center">
        <div class="col-4">IMG-1</div>
        <div class="col-4">IMG-2</div>
        <div class="col-4">IMG-3</div>
        <div class="col-4">IMG-4</div>
        <div class="col-4">IMG-5</div>
        <div class="col-4">IMG-6</div>
    </div>

</div> --}}




{{-- {{ $product['frontImage'] }} --}}
<div class="container">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            {{ $product['name'] }}
                        </p>
                    </div>
                </div>

            </div>
        @endforeach

    </div>
</div>
