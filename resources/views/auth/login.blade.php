@extends('layouts.app')

@section('content')
<div class="text-center" style>
<form class="form-signin" method="post">
    @csrf
  <h1 class="h3 mb-3 font-weight-normal">Вход</h1>
  <label for="inputEmail" class="sr-only">Email </label>
  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email " required autofocus>
  <label for="inputPassword" class="sr-only">Пароль</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Пароль" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="1" name="remember"> Запомнить меня
</label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
  <p class="mt-5 mb-3 text-muted">&copy;   2019</p>
</form>
</div>
@endsection