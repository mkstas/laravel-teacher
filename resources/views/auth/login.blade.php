@extends('layouts.app')

@section('content')
     <div class="login__body">
         <h1 class="login__title">Вход в администраитвную панель</h1>

         <form method="POST" action="{{ route('login') }}">
             <div class="login__row">
                 <label for="email" class="login__label">Электронная почта</label>

                 <div class="col-md-6">
                     <input id="email" type="email" class="login__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Электронная почта">

                     @error('email')
                         <div class="login__invalid" role="alert">
                             <strong>Некорректная электронная почта</strong>
                         </div>
                     @enderror
                 </div>
             </div>

             <div class="login__row">
                 <label for="password" class="login__label">Пароль</label>

                 <div class="col-md-6">
                     <input id="password" type="password" class="login__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Пароль">

                     @error('password')
                         <div class="login__invalid" role="alert">
                             <strong>Неккоректный пароль</strong>
                         </div>
                     @enderror
                 </div>
             </div>

             <div class="login__row">
                 <button type="submit" class="login__button">
                     Войти
                 </button>
             </div>

             @csrf
         </form>
    </div>
@endsection
