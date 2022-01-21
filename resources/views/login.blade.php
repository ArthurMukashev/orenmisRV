@extends('layouts.app')

@section('title','OrenMIS | Вход в систему')

@section('content')
    <main class="form-signin d-flex flex-column justify-content-center">
        @if($errors->any())
            <div class="alert alert-danger text">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="text-center border border-primary rounded-3 p-3" action="{{ route('login') }}" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal">OrenMIS Right_Version</h1>

            <div class="input-group mb-3">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </span>
                <input type="text" name="email" class="form-control" placeholder="Логин">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                      <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                    </svg>
                </span>
                <input type="password" name="password" class="form-control" placeholder="Пароль">
            </div>

{{--            <div class="checkbox mb-3">--}}
{{--                <label>--}}
{{--                    <input type="checkbox" value="remember-me"> Запомнить--}}
{{--                </label>--}}
{{--            </div>--}}
            <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
        </form>
    </main>
@endsection
