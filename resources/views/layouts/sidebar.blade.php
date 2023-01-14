<nav class="hidden md:block bg-gray-800 border-r flex-shrink-0 w-60 px-6 overflow-y-auto">

   <div class="h-16 mb-12 -mx-6 bg-gray-900">
      {{-- <x-application-logo class="block h-20 w-auto mx-auto" /> --}}
      <h2 class="h-full flex flex-col justify-center items-center font-semibold text-lg text-emerald-50">
         SPK SAW & WP
      </h2>
   </div>

   <x-sidelink :href="route('dashboard')" :active="request()->routeIs('dashboard')">
      <span class="material-symbols-outlined mr-2">
         dashboard
      </span>
      {{ __('Dashboard') }}
   </x-sidelink>

   <x-sidelink :href="route('alternatif.list')" :active="request()->routeIs('alternatif.*')">
      <span class="material-symbols-outlined mr-2">
         folder
      </span>
      Alternatif
   </x-sidelink>

   <x-sidelink :href="route('kriteria.list')" :active="request()->routeIs('kriteria.*')">
      <span class="material-symbols-outlined mr-2">
         folder
      </span>
      Kriteria
   </x-sidelink>

</nav>
