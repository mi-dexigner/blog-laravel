<div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="{{url('/')}}"><img src="{{asset('/images/logo.png')}}"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="#">Blog</a>
                        </li>
             @if (Route::has('login'))
                   @auth
                        <li class="nav-item">
                           <a class="nav-link">Dashboard</a>
                    @else
                    <li class="nav-item"> <a href="{{ route('login') }}" class="nav-link">Log in</a>

                        @if (Route::has('register'))
                        <li class="nav-item"> <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    @endauth
                
            @endif
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="{{url('/')}}"><img src="{{asset('/images/logo.png')}}"></a></div>
               <div class="menu_main">
                  <ul>
                     
                     <li class="active"><a href="{{url('/')}}">Home</a></li>
                     <li><a href="#">About</a></li>
                     <li><a href="#">Services</a></li>
                     <li><a href="#">Blog</a></li>
                     <li><a href="#">Contact us</a></li>
                     @if (Route::has('login'))
                   @auth
                        <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    @else
                    <li> <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                        <li> <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                
            @endif
                  </ul>
               </div>
            </div>
         </div>