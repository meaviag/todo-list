@extends('layouts.app')
@section('title')Планировщик времени@endsection
@section('content')
<div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg mt-5">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Планировщик времени "Plan Time"</h1>
        <p class="lead">Эффективно управляйте своим временем вместе с нами! Наш сервис поможет вам составить идеальное расписание на день. Никаких больше опозданий и срывов дедлайнов – только продуктивные дни и приятные вечера.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
            @guest
            <a class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" href="{{route('registration')}}" role="button">Зарегистрироваться</a>
            <a class="btn btn-outline-secondary btn-lg px-4" href="{{route('autho')}}" role="button">Авторизоваться</a>
            @endguest
            @auth
            <a class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" href="{{route('tasks')}}" role="button">Планировать время</a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <a class="btn btn-outline-secondary btn-lg px-4" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" role="button">Выйти</a>
            </form>
            @endauth
        </div>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
        <img class="rounded-lg-3" src="https://sun9-31.userapi.com/impg/3YnhLa7dxv7Qo9flQPqUeF2uT4Up95HcCCLx3A/MDkqWpnHGDM.jpg?size=1280x614&quality=96&sign=121ae1ca0aa1e2682f00fb18e0cb7f73&type=album" alt="" width="720">
    </div>
</div>

<div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom"><ya-tr-span data-index="6-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Hanging icons" data-translation="Висячие иконки" data-ch="0" data-type="trSpan" style="visibility: initial !important;">Как пользоваться? Легко и просто!</ya-tr-span></h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <!-- <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#toggles2"></use>
                </svg> -->
            </div>
            <div>
                <h3 class="fs-2 text-body-emphasis">Зарегистрируйтесь или авторизируйтесь</h3>
                <p>Для того, чтобы пользоваться нашим сайтом нужно просто <a href="{{route('registration')}}">зарегистрироваться</a>, если вы зарегистрированы, то <a href="{{route('autho')}}">авторизуйтесь</a>.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <!-- <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#cpu-fill"></use>
                </svg> -->
            </div>
            <div>
                <h3 class="fs-2 text-body-emphasis">Доступ ограничен?</h3>
                <p>У вас не работает "Plan Time"? Значит вы не выполнили предыдущий пункт. Выполните первый пункт, чтобы наш сайт для вас заработал!</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <!-- <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#tools"></use>
                </svg> -->
            </div>
            <div>
                <h3 class="fs-2 text-body-emphasis">Теперь планируете свои планы</h3>
                <p>С нашим сайтом, после регистрации, вы сможете планировать своё время наперёд. Удачи вам в использовании сайта!</p>
            </div>
        </div>
    </div>
</div>
<hr class="featurette-divider">
<div class="row featurette aligin-center" >
    <div class="col-md-7" style="padding:200px;">
        <h2 class="featurette-heading fw-normal lh-1">Создавайте задачи!
            <span class="text-body-secondary">Это просто.</span>
        </h2>
    </div>
    <div class="col-md-3 shadow-lg">
        <img src="https://sun9-38.userapi.com/impg/Ca7gAZMM667AWKSISvyvhHUjs16DFuYwB9H9bQ/cPjLTCIaHNc.jpg?size=601x524&quality=96&sign=dbc0f8cfed80b4fde3fc032dcc343ac5&type=album" alt="">
    </div>
</div>
<hr class="featurette-divider">
@endsection