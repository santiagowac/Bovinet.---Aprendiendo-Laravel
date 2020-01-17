<nav class="navbar navbar-expand-md fixed-top top-nav">
    	<div class="container">
    		  <a class="navbar-brand" href="#"><strong><span class="g-r">Bo</span>vinet.</strong></a>
    		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
    		  </button>

    		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    		    <ul class="navbar-nav ml-auto">
    		      <li class="nav-item @yield('class')">
    		        <a class="nav-link" href="/inicio">Inicio</a>
    		      </li>
    		      <li class="nav-item @yield('class-qs')">
    		        <a class="nav-link" href="/quienes-somos">Quienes somos</a>
    		      </li>
    		      <li class="nav-item @yield('class-pb')">
    		        <a class="nav-link" href="/publicaciones">Publicaciones</a>
    		      </li>
              @guest
                  <li class="nav-item @yield('class-lg')">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item @yield('class-reg')">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
    		    </ul>
    		  </div>
    	</div>
</nav>
