<x-app-layout>
   <x-slot name="header">
      Alternatif
   </x-slot>

   <x-container>
      <div class="mb-6">
         <div class="flex items-center justify-between">
            <h3 class="font-semibold text-3xl text-gray-700">Tambah Alternatif</h3>
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
                     <x-input-label for="C1" value="C1" />
                     <x-text-input type="text" name="C1" id="C1" class="w-full mt-1" value=""
                        required />
                  </div>
                  <div>
                     <x-input-label for="C2" value="C2" />
                     <x-text-input type="text" name="C2" id="C2" class="w-full mt-1" value=""
                        required />
                  </div>
                  <div>
                     <x-input-label for="C3" value="C3" />
                     <x-text-input type="text" name="C3" id="C3" class="w-full mt-1" value=""
                        required />
                  </div>
                  <div>
                     <x-input-label for="C4" value="C4" />
                     <x-text-input type="text" name="C4" id="C4" class="w-full mt-1" value=""
                        required />
                  </div>
               </div>

               <div class="my-14"></div>

               <div class="flex items-center">
                  <a href="{{ route('alternatif.list') }}" class="py-1 px-3 mr-2 border rounded-lg">Batal</a>
                  <x-primary-button>Simpan</x-primary-button>
               </div>
            </div>

         </form>
      </x-box>
   </x-container>
</x-app-layout>
