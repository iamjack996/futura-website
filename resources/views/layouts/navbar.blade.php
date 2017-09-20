@include('partials.above-navbar-alert')
<nav class="navbar navbar-toggleable-md fixed-top navbar-light bg-faded futura-navbar">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <a class="navbar-brand" href="{{ url('/') }}">FUTURA 未來實習看板</a>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
         
        </ul>
<ul class="navbar-nav">
              @if(!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('login') }}">登 入</a>
                    </li>
                    <li class="nav-item futura-register">
                        <a class="nav-link" href="{{ url('register') }}">註 冊</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ Auth::user()->homeUrl() }}">{{ Auth::user()->first_name }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('logout') }}">登 出</a>
                    </li>
                    @endif 
                    
</ul>
</div>


      </div>
    </nav>