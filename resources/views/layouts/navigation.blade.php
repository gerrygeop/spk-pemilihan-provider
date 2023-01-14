<nav x-data="{ open: false }" class="md:flex md:flex-shrink-0" x-on:click.away="open = false">
   <div
      class="bg-white px-3 py-2 flex items-center justify-between md:hidden md:flex-shrink-0 md:w-60 md:justify-center border-b">

      {{-- Logo --}}
      <div class="flex items-center">
         <a href="{{ route('dashboard') }}">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
         </a>
      </div>

      <!-- Hamburger -->
      <div class="flex items-center md:hidden">
         <button @click="open = ! open"
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
               <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
               <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
         </button>
      </div>
   </div>

   <!-- Responsive Navigation Menu -->
   <div :class="{ 'block': open, 'hidden': !open }" class="fixed inset-x-0 bg-gray-800 hidden md:hidden z-50">
      <div class="pt-2 pb-3 space-y-1">
         <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
         </x-responsive-nav-link>
      </div>

      <!-- Responsive Settings Options -->
      <div class="py-4 border-t border-t-gray-200 border-b-2 border-b-emerald-500">
         <div class="px-4">
            <div class="font-medium text-base text-gray-400">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
         </div>

         <div class="mt-3 space-y-1">
            <x-responsive-nav-link :href="route('profile.edit')">
               {{ __('Profile') }}
            </x-responsive-nav-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
               @csrf

               <x-responsive-nav-link :href="route('logout')"
                  onclick="event.preventDefault();
                                        this.closest('form').submit();">
                  {{ __('Log Out') }}
               </x-responsive-nav-link>
            </form>
         </div>
      </div>
   </div>

   <div
      class="flex justify-between items-center bg-white text-sm border-b shadow-sm md:shadow-none w-full p-4 md:px-8 md:text-md">
      {{-- Page Heading --}}
      <h6 class="font-medium text-lg text-gray-700">
         {{ $header }}
      </h6>

      {{-- Settings Dropdown --}}
      <div class="hidden md:flex md:items-center">
         <x-dropdown align="right" width="48">
            <x-slot name="trigger">
               <button
                  class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                  <div>{{ Auth::user()->name }}</div>

                  <div class="ml-1">
                     <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                           d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                           clip-rule="evenodd" />
                     </svg>
                  </div>
               </button>
            </x-slot>

            <x-slot name="content">
               <x-dropdown-link :href="route('profile.edit')">
                  {{ __('Profile') }}
               </x-dropdown-link>

               <!-- Authentication -->
               <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <x-dropdown-link :href="route('logout')"
                     onclick="event.preventDefault();
                                          this.closest('form').submit();">
                     {{ __('Log Out') }}
                  </x-dropdown-link>
               </form>
            </x-slot>
         </x-dropdown>
      </div>
   </div>
</nav>
