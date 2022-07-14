<div>
    <div class="max-w-7xl mx-auto rounded px-4 sm:px-6 lg:px-8 py-6 bg-white mt-6">

        <div class="ml-2">
            <div class="text-center pb-3">
                <h2 class="text-gray-600 text-xl font-semibold">Cola 1</h2>
            </div>
    
            <div class="grid grid-cols-8">
                @foreach ($queue_1 as $item)
                    <x-card>
                        <x-slot name='id_ticket'>
                            {{$item->id}}
                        </x-slot>

                        <x-slot name='name'>
                            {{$item->name}}
                        </x-slot>
                    </x-card>
                @endforeach
            </div>
        </div>

    </div>

    <div class="max-w-7xl mx-auto rounded px-4 sm:px-6 lg:px-8 py-6 bg-white mt-6">

        <div class="ml-2">
            <div class="text-center pb-3">
                <h2 class="text-gray-600 text-xl font-semibold">Cola 2</h2>
            </div>
    
            <div class="grid grid-cols-8">
                @foreach ($queue_2 as $item)
                    <x-card>
                        <x-slot name='id_ticket'>
                            {{$item->id}}
                        </x-slot>

                        <x-slot name='name'>
                            {{$item->name}}
                        </x-slot>
                    </x-card>
                @endforeach
            </div>
        </div>

    </div>
</div>
