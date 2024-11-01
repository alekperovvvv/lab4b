@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Мои объявления</h1>
    @foreach($ads as $ad)
        <div>
            <h2>{{ $ad->title }}</h2>
            <p>{{ $ad->description }}</p>
            <a href="{{ route('ads.index') }}">Вернутся назад</a>
            </form>
        </div>
    @endforeach
</div>
@endsection