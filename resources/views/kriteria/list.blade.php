<x-app-layout>
   <x-slot name="header">
      Kriteria
   </x-slot>

   <x-container>
      <x-box>
         Kriteria page
      </x-box>

      <div class="my-4"></div>

      <x-table>
         <x-slot name="thead">
            <x-tr-head>
               <x-th>Name</x-th>
               <x-th>Nilai</x-th>
               <x-th colspan="2">Keterangan</x-th>
            </x-tr-head>
         </x-slot>
         <x-slot name="tbody">
            <x-tr-body>
               <x-td>Lorem Ipsum</x-td>
               <x-td>Lorem Ipsum</x-td>
               <x-td>Lorem Ipsum</x-td>
               <x-td-action />
            </x-tr-body>
            <x-tr-body>
               <x-td>Lorem Ipsum</x-td>
               <x-td>Lorem Ipsum</x-td>
               <x-td>Lorem Ipsum</x-td>
               <x-td-action />
            </x-tr-body>
            <x-tr-body>
               <x-td>Lorem Ipsum</x-td>
               <x-td>Lorem Ipsum</x-td>
               <x-td>Lorem Ipsum</x-td>
               <x-td-action />
            </x-tr-body>
            <x-tr-body>
               <x-td>Lorem Ipsum</x-td>
               <x-td>Lorem Ipsum</x-td>
               <x-td>Lorem Ipsum</x-td>
               <x-td-action />
            </x-tr-body>
         </x-slot>
      </x-table>
   </x-container>
</x-app-layout>
