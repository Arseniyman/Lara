@extends('layouts.layout')
@section('script')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
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
                    <p><strong>Цена: </strong> {{ $good->price }}₽</p>
                    {{-- <p class="btn-holder"><a href="{{ url('add-to-cart/'.$good->id) }}" class="btn btn-warning btn-block text-center" role="button">В корзину</a> </p> --}}
                    {{-- <p class="btn-holder"> --}}
                        <form id="add-good" action="add-to-cart/{{ $good->id }}" method="POST">
                            @csrf
                            <input type="submit" value="В корзину" class="btn btn-warning btn-block text-center">
                        </form>
                    {{-- </p> --}}
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $(document).ready(function() {
        
        $('#add-good').submit(function() {
            $.ajax({
                type: "POST",
                url: "{{ url('add-to-cart') }}" ,
                data: jgood,
                success: function(data) {
                    console.log(data);
                }
            });
        });
        
    });
    </script>
@endsection