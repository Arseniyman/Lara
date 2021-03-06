@extends("layouts.layout")

@section("tokenMeta")
    @include("includes.tokenMeta")
@endsection

@section("container")
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
                    <input id="/add-to-cart/{{ $good->id }}" type="submit" 
                    value="В корзину" class="btn btn-warning btn-block text-center addGood">
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
@endsection

@section("scriptjs")
    <script type="text/javascript" src="public/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

    $(document).ready(function() {

        $(".addGood").click(function() {

           var url = $(this).attr("id");
            $.ajax({
                type: "POST",
                dataType: "json",
                url: url,
                data: {
                    _token: "{{ csrf_token() }}"
                }
            });
        });
    });

    </script>
@endsection