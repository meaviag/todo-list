@extends('layouts.app')
@section('title') Регистрация @endsection
@section('content')
<form action="{{route('registration')}}" method="post">
    @csrf
    <div class="container">
        <h3>Регистрация</h3>
        <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input type="txt" name="name" value="{{ old('name')}}" placeholder="Введите имя" class="form-control" id="name" aria-describedby="name">
        </div>
        @error('name')
            <p class="alert alert-danger ">{{ $message }}</p>
        @enderror

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
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Повторите пароль</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Минимум 8 символов" id="password_confirmation">
        </div>
        @error('password_confirmation')
            <p class="alert alert-danger ">{{ $message }}</p>
        @enderror
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
        <a href="#">Уже зарегистрированы?</a>
    </div>
</form>
@endsection