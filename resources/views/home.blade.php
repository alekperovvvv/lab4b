@extends('layouts.app')

@section('content')
<div>
    <div>
        <div>
            <div>
                <div class="card-header">{{ __('Успешно!') }}</div>
                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Вы успешно зашли!') }}
                </div>
                <a href="{{ route('ads.index') }}">На главную!</a>
            </div>
        </div>
    </div>
</div>
@endsection
