@extends("layouts.layout")

@section("tokenMeta")
    @include("includes.tokenMeta")
@endsection

@section("container")
    <h1>Корзина</h1>
    @foreach ($goods as $good)
        @if (!empty($numGoodsCart[$good->id]))
            <div class="alert alert-info col-xs-18">
                <h3>{{ $good->name }}</h3>
                <p>{{ $good->description }}</p>
                <p>{{ $good->price }}₽ - {{ $numGoodsCart[$good->id] }} шт.</p>
            </div>
        @endif
    @endforeach
@endsection
