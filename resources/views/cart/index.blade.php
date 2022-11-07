@extends('layouts.app')
@section('title')
    Sebet
@endsection
@section('content')
    <div class="container-lg py-3">
        <div class="h3 mb-3">
            Sebet
        </div>
        <div class="row">
            <div class="col-md-8 col-xl-9">
                @forelse($products as $product)
                    @include('app.cart_product')
                @empty
                    <img src="{{ asset('storage/images/not-found.gif') }}" alt="" class="img-fluid">
                @endforelse
            </div>
            <div class="col">

            </div>
        </div>
    </div>
@endsection