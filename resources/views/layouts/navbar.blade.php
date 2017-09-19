@include('partials.above-navbar-alert')

{{-- 

                    @if(!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('login') }}"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('register') }}"><i class="fa fa-registered"></i> Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ Auth::user()->homeUrl() }}"><i class="fa fa-user"></i> {{ Auth::user()->first_name }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                    @endif
 --}}

<nav class="navbar navbar-default navbar-fixed-top navbar-noborder">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">FUTURA 未來實習看板</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
                  @if(!Auth::check())
                    <li>
                        <a href="{{ url('login') }}">登 入</a>
                    </li>
                    <li>
                        <a href="{{ url('register') }}">註 冊</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ Auth::user()->homeUrl() }}">{{ Auth::user()->first_name }}</a>
                    </li>
                    <li>
                        <a href="{{ url('logout') }}">登 出</a>
                    </li>
                    @endif
          </ul>
        </div>
      </div>
    </nav>