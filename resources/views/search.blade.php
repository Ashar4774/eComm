@extends('master')
@section('content')
    {{ View::make('header') }}
    <div class="container Search-product row">
        <div class="col-sm-4">
            <a href="#">Feature</a>
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h3>Searched Product is</h3>
                @foreach ($search as $item)

                    <div class="searched-item">
                        <a href="detail/{{ $item['id'] }}">
                            <img class="trending-img" src="{{ $item['gallery'] }}" alt="{{ $item['id'] }}">
                            <div class="">
                                <h2>{{ $item['name'] }}</h2>
                                <h5>{{ $item['description'] }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{ View::make('footer') }}
@endsection
