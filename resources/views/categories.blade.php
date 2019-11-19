@extends('layouts.master')

@section('title', 'Все категории ')

@section('content')

        @foreach($categories as $category)
            <div class="panel">
                <a href="{{$category->code}}">
{{--                   TODO--}}
                    <h2>{{$category->name}}</h2>
                </a>
                <p>
                    {{$category->description}}
                </p>
            </div>
            @endforeach
@endsection
