@extends("layouts.layout")

@section("tokenMeta")
    @include("includes.tokenMeta")
@endsection

@section("container")
    {{-- <h1>Добавить новый товар</h1> --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ol>
                @foreach($errors->all() as $er)
                    <li>{{ $er }}</li>
                @endforeach
            </ol>
        </div>
    @endif
    
    <div class="container">
        <div class="row">
            <h1 class="col-sm-6">
                Добавить новый товар
            </h1>
            <h1 class="col-sm-6">
                Удалить товар
            </h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <form action="{{route("addGood")}}" method="post" class="col-sm-6">
                @csrf
        
                <div class="form-group">
                  <label for="name">Введите имя</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="имя">
                </div>
        
                <div class="form-group">
                    <label for="description">Введите описание</label>
                    <input type="text" name="description" id="description" class="form-control" placeholder="описание">
                </div>
        
                <div class="form-group">
                    <label for="photo">Введите ссылку на фото</label>
                    <input type="text" name="photo" id="photo" class="form-control" placeholder="ссылка на фото">
                </div>
        
                <div class="form-group">
                    <label for="price">Введите цену</label>
                    <input type="number" name="price" id="price" class="form-control" placeholder="цена">
                </div>
        
                <div>
                    <input type="submit" class="btn btn-success" value="Добавить">
                </div>
            </form>
        
            <form action="{{ route("deleteGood") }}" method="post" class="col-sm-6">
            @csrf
            <div class="form-group">
                <label for="good_id">Введите id</label>
                <input type="number" name="good_id" id="good_id" class="form-control" placeholder="id товара">
            </div>
        
            <div>
                <input type="submit" class="btn btn-danger" value="Удалить">
            </div>
            
            </form>
        </div>
    </div>
    
@endsection