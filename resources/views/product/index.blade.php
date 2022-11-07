@extends('layouts.app')
@section('title')
    Foods
@endsection
@section('content')
    <div class="container-lg py-3">
        <div class="row justify-content-center align-items-center">
            @include('app.slider')
        </div>
        <div class="display-2 text-muted text-center pt-3 pb-4">
            Menýu
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 g-3 mb-3">
            @foreach($products as $product)
                <div class="col">
                    @include('app.product')
                </div>
            @endforeach
        </div>
    </div>
    <div class="bg-primary bg-opacity-25">
        <div class="container-xl">
            @include('app.kofe_30')
        </div>
    </div>
    <div class="container-xl">
        <div>
            @include('app.news')
        </div>
    </div>
    <div class="container-xl">
        <div>
            @include('app.contact')
        </div>
    </div>
    @include('app.footer')
@endsection