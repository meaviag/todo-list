@extends('layouts.app')
@section('title')Авторизация@endsection
@section('content')
<form action="{{ route('autho') }}" method="post">
    @csrf
    <div class="container">
        <h3>Авторизоваться</h3>
        <div class="mb-3">
            <label for="email" class="form-label">Электронная почта</label>
            <input type="email" name="email" value="{{ old('email')}}" class="form-control" placeholder="Введите Email" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Мы никогда не передадим вашу электронную почту кому-либо еще.</div>
        </div>
        @error('email')
            <p class="alert alert-danger ">{{ $message }}</p>
        @enderror
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" name="password" class="form-control" placeholder="Минимум 8 символов" id="password">
        </div>
        @error('password')
            <p class="alert alert-danger ">{{ $message }}</p>
        @enderror
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="remember" id="remember">
            <label class="form-check-label" for="remember">Запомнить меня</label>
            <a href="#">Забыли пароль?</a>
        </div>
        <button type="submit" class="btn btn-primary">Авторизоваться</button>
    </div>
</form>
@endsection