 <nav style="position: relative">
    <ul id="dropdown1" class="dropdown-content class grey lighten-5">
    <li><a href="/dashboard" class="black-text" >Dashboard</a></li>
      <li><a href="/posts/create" class="black-text" >New Post</a></li>
      <li>
          <a href="{{ route('logout') }}" class="black-text" 
              onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
              Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
      </li>
    </ul>
    <div class="nav-wrapper black">
      <a href="#!" class="brand-logo">{{config('app.name','LPT App')}}</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact Us</a></li>
        <li><a href="/posts">Blog</a></li>
        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a class="dropdown-button" href="#!" data-activates="dropdown1">
                                    {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                        @endguest
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact Us</a></li>
        <li><a href="/posts">Blog</a></li>
        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
      </ul>
    </div>
    <div class="progress grey lighten-4 center" style="position: absolute; top: 88%;">
            <div class="indeterminate black lighten-2"></div>
    </div>
  </nav>
          