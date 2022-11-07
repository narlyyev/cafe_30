<div class="bg-warning rounded h-100">
    <img src="{{ asset('storage/images_2/'.$product->image) }}" alt="" class="w-100 rounded-top">
    <div class="h5 fw-normal text-center pt-3">
        {{ $product->name_tm }}
    </div>

    <div class="d-flex justify-content-around align-items-center">
        <div class="h5 fw-bolder text-center py-1">
            {{ number_format($product->price, 2, '.', ' ') }}
            <small>TMT</small>
        </div>
        <div class="">
            <a href="{{ route('cart.add', $product->id) }}" class="btn btn-sm mb-3">
                <i class="bi-cart-plus-fill h4 text-danger"></i>
            </a>
        </div>
    </div>
</div>