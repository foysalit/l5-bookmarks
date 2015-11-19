@extends('layouts.app')

@section('content')
<div class="page-login">
<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="assets/images/logo.png" class="image">
      <div class="content">
        Register account
      </div>
    </h2>
    <form class="ui large form" action="/auth/register" method="POST">
      {!! csrf_field() !!}
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="name" placeholder="Name">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password_confirmation" placeholder="Password">
          </div>
        </div>
        <button class="ui fluid large teal submit button">Register</button>
      </div>

      <div class="ui error message"></div>

    </form>

    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
          <div class="ui negative message">{{ $error }}</div>
      @endforeach
    @endif

    <div class="ui message">
      Already have an account? <a href="{{ route('auth.login') }}">Sign In</a>
    </div>
  </div>
</div>
</div>
@endsection