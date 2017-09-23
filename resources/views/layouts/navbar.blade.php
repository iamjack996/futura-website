@include('partials.above-navbar-alert')
<nav class="navbar navbar-light fixed-top navbar-expand-md futura-navbar">
<a class="navbar-brand" href="{{ url('/') }}">
<svg 
 xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink"
 width="30px" height="31px" class="futura-logo">
<defs>
<filter id="Filter_0">
    <feFlood flood-color="rgb(255, 255, 255)" flood-opacity="0.6" result="floodOut" />
    <feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
    <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
</filter>
<linearGradient id="PSgrad_0" x1="61.566%" x2="0%" y1="78.801%" y2="0%">
  <stop offset="0%" stop-color="rgb(28,241,198)" stop-opacity="1" />
  <stop offset="100%" stop-color="rgb(4,192,254)" stop-opacity="1" />
</linearGradient>

</defs>
<g filter="url(#Filter_0)">
<path fill-rule="evenodd"  opacity="0.8" fill="rgb(30, 242, 255)"
 d="M29.041,12.549 L20.888,12.549 L20.888,20.803 C20.888,21.339 20.459,21.774 19.929,21.774 L11.775,21.774 L11.775,30.027 C11.775,30.564 11.346,30.999 10.816,30.999 L3.622,30.999 C3.092,30.999 2.663,30.564 2.663,30.027 L2.663,20.803 L2.663,19.346 L2.663,12.063 C2.663,11.979 2.677,11.899 2.697,11.821 C2.677,11.743 2.663,11.662 2.663,11.578 L2.663,3.809 C2.663,3.273 3.092,2.838 3.622,2.838 L29.041,2.838 C29.571,2.838 30.001,3.273 30.001,3.809 L30.001,11.578 C30.001,12.114 29.571,12.549 29.041,12.549 Z"/>
</g>
<path fill="url(#PSgrad_0)" opacity="0.4"
 d="M29.041,12.549 L20.888,12.549 L20.888,20.803 C20.888,21.339 20.459,21.774 19.929,21.774 L11.775,21.774 L11.775,30.027 C11.775,30.564 11.346,30.999 10.816,30.999 L3.622,30.999 C3.092,30.999 2.663,30.564 2.663,30.027 L2.663,20.803 L2.663,19.346 L2.663,12.063 C2.663,11.979 2.677,11.899 2.697,11.821 C2.677,11.743 2.663,11.662 2.663,11.578 L2.663,3.809 C2.663,3.273 3.092,2.838 3.622,2.838 L29.041,2.838 C29.571,2.838 30.001,3.273 30.001,3.809 L30.001,11.578 C30.001,12.114 29.571,12.549 29.041,12.549 Z"/>
<path fill-rule="evenodd"  fill="rgb(30, 242, 255)"
 d="M26.378,9.712 L18.224,9.712 L18.224,17.965 C18.224,18.502 17.795,18.936 17.265,18.936 L9.112,18.936 L9.112,27.190 C9.112,27.726 8.682,28.161 8.152,28.161 L0.958,28.161 C0.428,28.161 -0.001,27.726 -0.001,27.190 L-0.001,17.965 L-0.001,16.509 L-0.001,9.226 C-0.001,9.142 0.013,9.061 0.033,8.983 C0.013,8.905 -0.001,8.825 -0.001,8.740 L-0.001,0.972 C-0.001,0.436 0.428,0.001 0.958,0.001 L26.378,0.001 C26.908,0.001 27.337,0.436 27.337,0.972 L27.337,8.740 C27.337,9.277 26.908,9.712 26.378,9.712 Z"/>
<path fill="url(#PSgrad_0)"
 d="M26.378,9.712 L18.224,9.712 L18.224,17.965 C18.224,18.502 17.795,18.936 17.265,18.936 L9.112,18.936 L9.112,27.190 C9.112,27.726 8.682,28.161 8.152,28.161 L0.958,28.161 C0.428,28.161 -0.001,27.726 -0.001,27.190 L-0.001,17.965 L-0.001,16.509 L-0.001,9.226 C-0.001,9.142 0.013,9.061 0.033,8.983 C0.013,8.905 -0.001,8.825 -0.001,8.740 L-0.001,0.972 C-0.001,0.436 0.428,0.001 0.958,0.001 L26.378,0.001 C26.908,0.001 27.337,0.436 27.337,0.972 L27.337,8.740 C27.337,9.277 26.908,9.712 26.378,9.712 Z"/>
</svg>
</a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fr-navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-stretch" id="fr-navbar">
        <ul class="navbar-nav ml-auto">


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
</nav>