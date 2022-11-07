@extends('layouts.app')
@section('title')
    {{ $category->name_tm }}
@endsection
@section('content')
    <div class="container-lg py-3">
            <div class="h3 my-3">
                {{ $category->name_tm }}
            </div>
        <div class="row g-3 mb-3">
            @foreach($products as $product)
                <div class="col-6 col-md-4 col-lg-3">
                    @include('app.product')
                </div>
            @endforeach
                @forelse($products as $product)
                @empty
                    <div class="d-inline-block bg-mute rounded shadow p-3 mb-3">
                        <div class="h3 text-center mb-0">
                            Haryt ýok
                        </div>
                    </div>
                @endforelse
        </div>
        {{ $products->links() }}
    </div>
@endsection