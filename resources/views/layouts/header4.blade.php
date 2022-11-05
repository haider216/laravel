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
                <div class="  pr-20 sm:mr-6 sm:space-x-6">
                    @auth
                    <div class="flex items-center md:order-2  ">
                        <button type="button" class="flex text-sm rounded-full" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        
                            <ul class="py-1" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="{{ route('profile.show') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                                </li>
                                @role('admin')
                                <li>
                                    <a href="admin_dashboard" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Admin</a>
                                </li>
                                @endrole
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="{{ route('logout') }} " class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Logout') }}</a>
                                    </form>
                                </li>
                            </ul>
                        </div>     
                    </div>

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
