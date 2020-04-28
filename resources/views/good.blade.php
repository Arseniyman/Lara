@extends('layouts.layout')

@section('container')
    <div class="container products">
        <div class="row">
        @foreach($goods as $good)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $good->photo }}" height="300">
                <div class="caption">
                    <h4>{{ $good->name }}</h4>
                    <p>{{ Str::limit(strtolower($good->description), 50) }}</p>
                    <p><strong>Price: </strong> {{ $good->price }}₽</p>
                    <p class="btn-holder"><a href="{{ url('add-to-cart/'.$good->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
@endsection