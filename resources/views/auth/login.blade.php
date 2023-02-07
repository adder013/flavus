@extends('layouts.app')

@section('content')
    <div class="login-wrap">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="image-wrap">
                <img src="{{ url('img/logo-short.png') }}" alt="Торговый дом УЭТ" />
            </div>
            <div class="form-group">
                <div class="input-wrap">
                <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Введите ваш email" autocomplete="off" required autofocus>
                </div>
                <div class="input-wrap">
                    <input id="password" type="password" name="password" placeholder="Введите пароль" required>
                    @if ($errors->has('password'))
                        <span class="error">Неверный пароль</span>
                    @endif
                    @if ($errors->has('email'))
                <span class="error">Неправильное имя пользователя или пароль</span>
                @endif
            </div>
            <div class="checkbox"><label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Запомнить пароль</label></div>
            <button type="submit">Войти</button>
            <a href="{{ route('password.request') }}">Забыли пароль?</a>
        </div>
        </form>
    </div>
@endsection
