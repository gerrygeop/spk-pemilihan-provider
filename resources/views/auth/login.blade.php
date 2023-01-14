<x-guest-layout>

   <div
      class="flex flex-col w-full mx-auto sm:max-w-md px-6 py-6 bg-white dark:bg-gray-800 shadow-md overflow-hidden border rounded-lg">

      <div class="mb-6">
         <h4 class="text-2xl text-gray-700 font-semibold">Login</h4>
      </div>

      <x-auth-session-status class="mb-4" :status="session('status')" />

      <form method="POST" action="{{ route('login') }}">
         @csrf

         <!-- Email Address -->
         <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
               autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
         </div>

         <!-- Password -->
         <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
               autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
         </div>

         <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500"
               href="{{ route('register') }}">
               {{ __('Belum punya akun?') }}
            </a>

            <x-primary-button class="ml-3">
               {{ __('Log in') }}
            </x-primary-button>
         </div>
      </form>
   </div>

   <!-- Session Status -->
</x-guest-layout>
