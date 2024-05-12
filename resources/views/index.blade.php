@extends('layouts.app')
@section('title')Планировщик времени@endsection
@section('content')
<div class="container">
    <h1>Планировщик</h1>
    <h1>Времени</h1>
    <p>Эффективно управляйте своим временем вместе с нами! Наш сервис поможет вам составить идеальное расписание на день. Никаких больше опозданий и срывов дедлайнов – только продуктивные дни и приятные вечера.</p>
    @guest
    <a class="btn btn-primary" href="{{route('autho')}}" role="button">Авторизоваться</a>
    <a class="btn btn-primary" href="{{route('registration')}}" role="button">Зарегистрироваться</a>
@endguest
@auth
<a class="btn btn-primary" href="{{route('tasks')}}" role="button">Список дел</a>
@endauth
</div>
@endsection