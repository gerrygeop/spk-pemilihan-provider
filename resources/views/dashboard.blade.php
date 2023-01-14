<x-app-layout>
   <x-slot name="header">
      {{ __('Dashboard') }}
   </x-slot>

   <x-container>
      <x-box class="text-white bg-gradient-to-r from-emerald-600 to-yellow-400">
         <span class="text-white">{{ __("You're logged in!") }}</span>
      </x-box>
   </x-container>
</x-app-layout>
