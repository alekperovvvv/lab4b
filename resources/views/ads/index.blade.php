@extends('layouts.app')

@section('content')
    <h1>Выставка кошек</h1>
    <a href="{{ route('ads.create') }}">Добавить своего кота</a>
    <a href="{{ route('ads.my_ads') }}">Посмотреть добавленных котов</a>
    @foreach($ads as $ad)
        <div>
            <h2>{{ $ad->title }}</h2>
            <p>{{ $ad->description }}</p>
            <p>Контактный телефон: {{ $ad->contact_phone }}</p>
            <p>Дата размещения: {{ $ad->created_at }}</p>
        </div>
    @endforeach
@endsection