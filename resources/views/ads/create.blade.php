@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Добавление кота</h1>
    <form action="{{ route('ads.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Порода вашего кота</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="description">Сведения о вашем питомце</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <div>
            <label for="contact_phone">Ваш номер телефона</label>
            <input type="number" name="contact_phone" id="contact_phone" required>
        </div>
        <button type="submit">Сохранить!</button>
        <a href="{{ route('ads.index') }}">Вернутся назад!</a>
    </form>
</div>
@endsection
