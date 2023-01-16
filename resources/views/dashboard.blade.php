<x-app-layout>
   <x-slot name="header">
      {{ __('Dashboard') }}
   </x-slot>

   <x-container>
      <x-box class="bg-emerald-50 border border-emerald-500">
         <p class="font-medium text-emerald-800">{{ __("You're logged in!") }}</p>
      </x-box>

      <x-box class="flex items-center justify-center mt-4">
         <h3 class="text-4xl text-gray-700 text-center font-semibold tracking-wide">
            Sistem Pendukung Keputusan <br> Pemilihan Provider Terbaik <br> Menggunakan Metode SAW & WP
         </h3>
      </x-box>
   </x-container>
</x-app-layout>
