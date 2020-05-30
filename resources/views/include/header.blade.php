<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h3 class="my-0 mr-md-auto font-weight-normal"><a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a></h3>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="{{ url('/book') }}">Продукты</a>
    </nav>
    <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
        <div class="dropdown">
            <a href="#" type="button" class="dropdown`-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a href="/logout" class="dropdown-item"><i class="fa fa-btn fa-sign-out"></i>Выйти</a>
            </div>
        </div>
        <div class="dropdown">

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
        @else
            <a href="{{ route('login') }}" class="btn btn-outline-primary" role="button">Войти</a>
        @endif
    </ul>
</div>
