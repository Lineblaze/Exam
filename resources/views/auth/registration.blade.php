@extends('layout.main-layout')
@section('content')

<h3>Регистрация</h3>

<form action="/api/auth/signup" method="post">
    @csrf
    <div>
        <label for="name">Введите имя пользователя</label>
        <input type="text" name="name" id="name" placeholder="Имя пользователя">
        <input type="email" name="email" id="email" placeholder="Введите e-mail">
        <label>
            <input type="password" name="password" id="password"> Придумайте пароль (не менее 6 символов)
        </label>
        <button type="submit">Зарегистрироваться</button>
    </div>
</form>
@endsection