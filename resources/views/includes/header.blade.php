@section('head')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">PT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Главная</a>
                <a class="nav-link" href="#">Обучение</a>
                <a class="nav-link" href="#">Контакты</a>
                @auth
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" role="button">Выйти</a>
                </form>
                    @endauth
            </div>
        </div>
    </div>
</nav>