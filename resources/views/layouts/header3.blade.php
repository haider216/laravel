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

<nav class="bg-blue-800  dark:bg-gray-900 dark:border-gray-700">
  <div class="px-5 container flex flex-wrap justify-between items-center mx-auto">
    <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-500" aria-controls="mobile-menu-2" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-10" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
      <ul class="flex flex-col mt-4 bg-transparent rounded-lg s md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-large md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
         <li>
            <a href="{{URL('/welcome')}}" title="Home Page">
                <img class="mx-auto max-w-xs object-scale-down h-12 w-24 py-1 pr-16 " src="{{ url('storage/hb.png') }}" alt="">
            </a>
        </li>   
        <li>
        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="text-white bg-transparent font-bold  rounded-lg  py-2.5 pr-2 pl-1 text-center inline-flex items-center" type="button">About Us <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="hidden z-10 w-44 text-base list-none bg-transparent rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                <ul class="py-1" aria-labelledby="dropdownButton">
                    <li>
                        <a href="mission_statement" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Mission Statement</a>
                    </li>
                    <li>
                        <a href="constitution" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Constitution</a>
                    </li>
                    <li>
                        <a href="conflict_of_interest_policy" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Conflict of Interest Policy</a>
                    </li>
                    <li>
                        <a href="charter" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Charter</a>
                    </li>
                    <li>
                        <a href="board_of_directors" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Board of Directors</a>
                    </li>
                    <li>
                        <a href="" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Association Awards (Coming Soon)</a>
                    </li>
                    <li>
                        <a href="contact_us" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Contact Us</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
        <button id="dropdownButton" data-dropdown-toggle="dropdown3" class="text-white bg-transparent font-bold  rounded-lg  py-2.5 pr-2 pl-1 text-center inline-flex items-center" type="button">Publications <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown3" class="hidden z-10 w-44 text-base list-none bg-transparent rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                <ul class="py-1" aria-labelledby="dropdownButton">
                    <li>
                        <a href="jipa" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">JIPA</a>
                    </li>
                    <li>
                        <a href="" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Books (Coming Soon)</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
        <button id="dropdownButton" data-dropdown-toggle="dropdown4" class="text-white bg-transparent font-bold  rounded-lg  py-2.5 pr-2 pl-1 text-center inline-flex items-center" type="button">Activities <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown4" class="hidden z-10 w-44 text-base list-none bg-transparent rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                <ul class="py-1" aria-labelledby="dropdownButton">
                    <li>
                        <a href="" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Conventions (Coming Soon)</a>
                    </li>
                    <li>
                        <a href="bourse" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Bourse (Coming Soon)</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
        <button id="dropdownButton" data-dropdown-toggle="dropdown5" class="text-white bg-transparent font-bold  rounded-lg  py-2.5 pr-2 pl-1 text-center inline-flex items-center " type="button">Database <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown5" class="hidden z-10 w-44 text-base list-none bg-transparent rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                <ul class="py-1" aria-labelledby="dropdownButton">
                    @if(Auth::check())
                    <li>
                        <a href="medals" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Medals Database</a>
                    </li>
                    <li>
                        <a href="phaleristics_publications" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Phaleristic Publications Database</a>
                    </li>
                    @else
                    <li>
                        <a href="login" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Medals Database</a>
                    </li>
                    <li>
                        <a href="login" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Phaleristic Publications Database</a>
                    </li>
                    @endif
                </ul>
            </div>
        </li>
        <li>
          <a href="#" class="block py-2.5 pr-2 pl-1 text-white font-bold rounded md:border-0 ">Research</a>
        </li>
        <li>
        <button id="dropdownButton" data-dropdown-toggle="dropdown6" class="text-white bg-transparent font-bold  rounded-lg  py-2.5 pr-2 pl-1 text-center inline-flex items-center" type="button">Software <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown6" class="hidden z-10 w-44 text-base list-none bg-transparent rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                <ul class="py-1" aria-labelledby="dropdownButton">
                    <li>
                        <a href="" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Description (Coming Soon)</a>
                    </li>
                    <li>
                        <a href="" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Download Link (Coming Soon)</a>
                    </li>
                </ul>
            </div>
        </li>
        @if(Auth::check())
        <li>
          <a href="forum" class="block py-2.5 pr-2 pl-1  text-white font-bold rounded  md:border-0 ">Forum</a>
        </li>
        @else 
        <li>
          <a href="login" class="block py-2.5 pr-2 pl-1  text-white font-bold rounded  md:border-0 ">Forum</a>
        </li>

        @endif
        <li>
        <button id="dropdownButton" data-dropdown-toggle="dropdown7" class="text-white bg-transparent font-bold rounded-lg  py-2.5 pr-2 pl-1 text-center inline-flex items-center" type="button">Advertising <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown7" class="hidden z-10 w-44 text-base list-none bg-transparent rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                <ul class="py-1" aria-labelledby="dropdownButton">
                    <li>
                        <a href="rates" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Rates</a>
                    </li>
                    <li>
                        <a href="contact_us" class="block py-2 px-4 text-sm text-white hover:font-bold bg-blue-800">Contact</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
          <a href="donations" class="block py-2.5 pr-2 pl-1  text-white font-bold rounded  md:border-0 ">Donations</a>
        </li>
      </ul>
    </div>
  </div>
</nav>