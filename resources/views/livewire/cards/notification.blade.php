<div class="w-full lg:w-1/2 px-4 mb-8" wire:poll.{{$this->poll}}>

    <div class="max-w-sm w-full lg:max-w-full lg:flex">

        <div class="bg-{{$this->color}}-300 h-card text-center border border-gray-400 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <div class="flex justify-center">
                    <img src="/icon/alert.png" class="h-8 w-8">
                </div>
                <div class="text-gray-900 font-bold text-2xl mb-2 mt-5">{{$this->title}}</div>
                <p class="text-gray-700 text-base pt-3">{{$this->description}}</p>
            </div>
        </div>
    </div>
</div>

