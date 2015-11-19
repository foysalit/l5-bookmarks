<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a class="active item">Home</a>
    <a class="item">Work</a>
    <a class="item">Company</a>
    <a class="item">Careers</a>
    <div class="right menu">
      <div class="item">
        <a class="ui button" href="{{ route('auth.login') }}">Log in</a>
      </div>
      <div class="item">
        <a class="ui primary button" href="{{ route('auth.register') }}">Sign Up</a>
      </div>
    </div>
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
  <a class="active item">Home</a>
  <a class="item">Work</a>
  <a class="item">Company</a>
  <a class="item">Careers</a>
  <a class="item" href="{{ route('auth.login') }}">Login</a>
  <a class="item" href="{{ route('auth.register') }}">Signup</a>
</div>