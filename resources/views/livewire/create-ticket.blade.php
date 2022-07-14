<div>
    <!-- component -->
    <div class="ml-2">
        <div class="text-center pb-3">
            <h2 class="text-gray-600 text-xl font-semibold">Crear Ticket</h2>
        </div>

        <div class="flex">

            <div class="mr-2 mt-4 w-1/5">
                <x-input type="number" placeholder="ID" wire:model.defer="id_ticket"></x-input>

                <x-input-error for="id_ticket" />
            </div>
            <div class="ml-2 mt-4 w-3/5">

                <x-input type="text" class="w-full" placeholder="Nombre" wire:model.defer="name"></x-input>

                <x-input-error for="name" />
            </div>

            <div class="text-center mt-4 w-1/5">
                <button
                    wire:click="save"
                    wire:loading.remove
                    wire:target="save"
                    class="bg-indigo-600 text-white px-6 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black">
                    Guardar
                </button>
    
                <span wire:loading wire:target="save" class="py-2 mt-4" >Cargando...</span>
            </div>
        </div>
    </div>
</div>
