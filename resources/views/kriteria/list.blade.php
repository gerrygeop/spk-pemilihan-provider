<x-app-layout>
   <x-slot name="header">
      Kriteria
   </x-slot>

   <x-container>
      <div class="mb-6">
         <div class="flex items-center justify-between">
            <h3 class="font-semibold text-3xl text-gray-700">Daftar Kriteria</h3>

            <x-link href="{{ route('kriteria.create') }}">
               <span class="material-symbols-outlined mr-2">
                  add
               </span>
               Tambah Kriteria
            </x-link>
         </div>
      </div>

      <div class="my-4"></div>

      <x-table>
         <x-slot name="thead">
            <x-tr-head>
               <x-th>Nama</x-th>
               <x-th>Bobot</x-th>
               <x-th colspan="2">Keterangan</x-th>
            </x-tr-head>
         </x-slot>
         <x-slot name="tbody">
            <x-tr-body>
               <x-td>C1</x-td>
               <x-td>2</x-td>
               <x-td>Cost</x-td>
               <x-td-action />
            </x-tr-body>
            <x-tr-body>
               <x-td>C2</x-td>
               <x-td>1</x-td>
               <x-td>Benefit</x-td>
               <x-td-action />
            </x-tr-body>
            <x-tr-body>
               <x-td>C3</x-td>
               <x-td>5</x-td>
               <x-td>Benefit</x-td>
               <x-td-action />
            </x-tr-body>
            <x-tr-body>
               <x-td>C4</x-td>
               <x-td>3</x-td>
               <x-td>Benefit</x-td>
               <x-td-action />
            </x-tr-body>
         </x-slot>
      </x-table>
   </x-container>
</x-app-layout>
