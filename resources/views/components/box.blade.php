<div {!! $attributes->merge(['class' => 'bg-white overflow-hidden shadow rounded']) !!}>
   <div class="p-6 text-gray-800">
      {{ $slot }}
   </div>
</div>
