<x-app-layout>
   <x-slot name="header">
      Alternatif
   </x-slot>

   <x-container>
      <div class="mb-6">
         <div class="flex items-center justify-between">
            <h3 class="font-semibold text-3xl text-gray-700">Daftar Alternatif</h3>

            <x-link href="{{ route('alternatif.create') }}">
               <span class="material-symbols-outlined mr-2">
                  add
               </span>
               Tambah Alternatif
            </x-link>
         </div>
      </div>

      <div class="my-4"></div>

      <x-table>
         <x-slot name="thead">
            <x-tr-head>
               <x-th>No</x-th>
               <x-th colspan="2">Nama</x-th>
            </x-tr-head>
         </x-slot>
         <x-slot name="tbody">
            <x-tr-body>
               <x-td>A1</x-td>
               <x-td>Lorem Ipsum</x-td>
               <x-td-action />
            </x-tr-body>
            <x-tr-body>
               <x-td>A2</x-td>
               <x-td>Lorem Ipsum</x-td>
               <x-td-action />
            </x-tr-body>
            <x-tr-body>
               <x-td>A3</x-td>
               <x-td>Lorem Ipsum</x-td>
               <x-td-action />
            </x-tr-body>
            <x-tr-body>
               <x-td>A4</x-td>
               <x-td>Lorem Ipsum</x-td>
               <x-td-action />
            </x-tr-body>
            <x-tr-body>
               <x-td>A5</x-td>
               <x-td>Lorem Ipsum</x-td>
               <x-td-action />
            </x-tr-body>
         </x-slot>
      </x-table>
   </x-container>
</x-app-layout>
