<x-app-layout>
   <x-slot name="header">
      Kriteria
   </x-slot>

   <x-container>
      <div class="mb-6">
         <div class="flex items-center justify-between">
            <h3 class="font-semibold text-3xl text-gray-700">Tambah Kriteria</h3>
         </div>
      </div>

      <x-box class="max-w-2xl">
         <form action="" method="POST">
            @csrf

            <div class="p-2">
               <div class="flex flex-col gap-y-6">
                  <div>
                     <x-input-label for="nama" value="Nama" />
                     <x-text-input type="text" name="nama" id="nama" class="w-full mt-1" value=""
                        required />
                  </div>

                  <div>
                     <x-input-label for="bobot" value="Bobot" />
                     <x-text-input type="text" name="bobot" id="bobot" class="w-full mt-1" value=""
                        required />
                  </div>

                  <div>
                     <x-input-label value="Keterangan" />
                     <div class="flex gap-x-6 mt-1">
                        <label for="benefit" class="text-base font-medium text-gray-800 flex items-center">
                           <x-text-input type="radio" id="benefit" value="benefit" name="keterangan"
                              class="mr-2 checked:text-emerald-600" checked="" />
                           Benefit
                        </label>
                        <label for="cost" class="text-base font-medium text-gray-800 flex items-center">
                           <x-text-input type="radio" id="cost" value="cost" name="keterangan"
                              class="mr-2 checked:text-emerald-600" checked="" />
                           Cost
                        </label>
                     </div>
                  </div>
               </div>

               <div class="my-14"></div>

               <div class="flex items-center">
                  <a href="{{ route('kriteria.list') }}" class="py-1 px-3 mr-2 border rounded-lg">Batal</a>
                  <x-primary-button>Simpan</x-primary-button>
               </div>
            </div>

         </form>
      </x-box>
   </x-container>
</x-app-layout>
