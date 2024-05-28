@extends('layouts.app')
@section('title')Задачи@endsection
@section('content')



    <section class="vh-100 d-flex">

        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px; height: -webkit-fill-available;">
            <a href="{{route('home')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <!-- <svg class="bi pe-none me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg> -->
                <span class="fs-4">Plan Time</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg> Задачи </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg> Важно </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg> Запланировано </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://thunderbird-mozilla.ru/images/big-images/kak-dobavit-uchetnuyu-zapis-v-mozilla-thunderbird/kak-dobavit-uchetnuyu-zapis-v-mozilla-thunderbird.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong value="{{Auth::user()->name}}"></strong>
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" href="#">Настройки</a></li>
                    <li><a class="dropdown-item" href="#">Профиль</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Выйти</a></li>
                    </form>
                </ul>
</div>
</div>

<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col">
            <div id="list1">
                <div class="card-body py-4 px-4 px-md-5" style="display:inline;">
                    <p class="h3 mt-3 mb-4 pb-3">
                        <u>Мой день</u>
                    </p>
                    <div class="pb-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row align-items-center">
                                    <input type="text" class="form-control form-control-lg" id="tasks" name="tasks" placeholder="Добавьте задачу">

                                    <a href="#!" data-mdb-tooltip-init title="Set due date"><i class="fas fa-calendar-alt fa-lg me-3"></i></a>

                                    <div>
                                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Добавить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="d-flex justify-content-end align-items-center mb-4 pt-2 pb-3">
                        <p class="small mb-0 me-2 text-muted">Фильтр</p>
                        <select data-mdb-select-init>
                            <option value="1">Все</option>
                            <option value="2">Выполненные</option>
                            <option value="3">Активные</option>
                            <option value="4">Крайний срок</option>
                        </select>
                        <p class="small mb-0 ms-4 me-2 text-muted">Сортировать</p>
                        <select data-mdb-select-init>
                            <option value="1">Добавленная дата</option>
                            <option value="2">Срок погашения</option>
                        </select>

                        <a href="#!" style="color: #23af89;" data-mdb-tooltip-init title="Ascending"><i class="fas fa-sort-amount-down-alt ms-2"></i></a>

                    </div>

                    <!-- <ul class="list-group list-group-horizontal rounded-0 bg-transparent">
                        <li class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                            <div class="form-check">
                                <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked1" aria-label="..." checked />
                            </div>
                        </li>
                        <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                            <p class="lead fw-normal mb-0">Buy groceries for next week</p>
                        </li> -->
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</form>

<!-- 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-white">
                <div class="card-body">
                    <form action="javascript:void(0);">
                        <input type="text" class="form-control add-task" placeholder="New Task...">
                    </form>
                    <ul class="nav nav-pills todo-nav">
                        <li role="presentation" class="nav-item all-task active"><a href="#" class="nav-link">All</a></li>
                        <li role="presentation" class="nav-item active-task"><a href="#" class="nav-link">Active</a></li>
                        <li role="presentation" class="nav-item completed-task"><a href="#" class="nav-link">Completed</a></li>
                    </ul>
                    <div class="todo-list">
                        <div class="todo-item">
                            <div class="checker"><span class=""><input type="checkbox"></span></div>
                            <span>Create theme</span>
                            <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                        </div>
                        <div class="todo-item">
                            <div class="checker"><span class=""><input type="checkbox"></span></div>
                            <span>Work on wordpress</span>
                            <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                        </div>

                        <div class="todo-item">
                            <div class="checker"><span class=""><input type="checkbox"></span></div>
                            <span>Organize office main department</span>
                            <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                        </div>
                        <div class="todo-item">
                            <div class="checker"><span><input type="checkbox"></span></div>
                            <span>Error solve in HTML template</span>
                            <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection