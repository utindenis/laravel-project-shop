@extends('layouts.master')

@section('title', 'Товар')

@section('content')
    <h1>iPhone X 64GB</h1>
    <h2>{{ $product }}</h2>
    <p>Цена: <b>71990 руб.</b></p>
    <img src="{{ Storage::url($product->image) }}">
    <p>Отличный продвинутый телефон с памятью на 64 gb</p>
    <a class="btn btn-success" href="{{ route('') }}">Добавить в корзину</a>
@endsection
