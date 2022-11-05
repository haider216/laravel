<nav class="flex items-center justify-between  bg-blue-800 border-b-8 border-white">
  <div class="flex items-center flex-shrink-0 text-white ">
    <div class="">
        <a href="{{URL('/welcome')}}" title="Home Page">
            <img class="h-28 w-28 " src="{{ url('storage/logo.png') }}" alt="logo">
        </a>
    </div>
    
  </div>
  <div class="font-serif lg:text-3xl sm:text-xs text-white invisible lg:visible ">International Phaleristics Association</div>
  
  <div class="flex items-center flex-shrink-0 pr-20">
        @if(Route::has('login'))
            <div class=" absolute top-10 right-0 pr-20 sm:mt-6 sm:mr-6 sm:space-x-6">
                @auth
                    <a href="{{ route('logout') }}"
                       class="no-underline hover:underline"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @else
                    <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-white uppercase">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-white uppercase">{{ __('Register') }}</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</nav>
