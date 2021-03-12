@extends('master')
@section('content')
    {{ View::make('header') }}
    <div class="container detail-product">
        <a href="/" class="btn btn-success mt-3">Go Back</a>
        <div class="row my-5">

            <div class="col-sm-6 div-detail-img">
                <img class="detail-img" src="{{ $detail['gallery'] }}" alt="">
            </div>
            <div class="col-sm-6">

                <h2>{{ $detail['name'] }}</h2>
                <h4>Price: {{ $detail['price'] }}</h4>
                <h6>Detail: {{ $detail['description'] }}</h6>
                <h6>Category: {{ $detail['category'] }}</h6>
                <br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$detail['id']}}" readonly>
                    <input type="submit" class="btn btn-primary" value="Add to Cart">
                    <input type="button" class="btn btn-success" value="Buy Now">
                </form>
            </div>
        </div>

    </div>
    {{ View::make('footer') }}
@endsection
