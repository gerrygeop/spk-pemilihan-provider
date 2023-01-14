@props(['active'])

@php
   $classes = $active ?? false ? 'font-medium text-emerald-400' : 'bg-transparent text-gray-500 hover:text-gray-200';
@endphp

<div class="mb-4">
   <a
      {{ $attributes->merge(['class' => 'flex items-center tracking-wide px-3 py-2 text-sm ' . $classes . ' rounded-md transform transition duration-150 ease-in-out']) }}>
      {{ $slot }}
   </a>
</div>
