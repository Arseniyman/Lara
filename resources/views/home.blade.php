@extends('layouts.layout')

@section('title')
    Главная
@endsection

@section('main')
    <h1>Hello, World firo dk</h1>
@endsection

@section('menu')
    @parent
    <p>Дополнительный текст</p>
@endsection