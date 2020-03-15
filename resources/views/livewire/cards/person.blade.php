<div class="w-full lg:w-1/2 px-4 mb-8 flex" wire:poll.{{$this->poll}}>

    <div class="w-full1 lg:w-1/3 pl-0 px-4">
        <div class="max-w-sm rounded overflow-hidden shadow-lg h-card">
            <img class="w-full h-64" src="https://picsum.photos/200?random={{random_int(1, 1000)}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{$this->people[0]}}</div>
            </div>
            <div class="px-6 py-4">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-1/3 px-2">
        <div class="max-w-sm rounded overflow-hidden shadow-lg h-card">
            <img class="w-full h-64" src="https://picsum.photos/200?random={{random_int(1, 1000)}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{$this->people[1]}}</div>
            </div>
            <div class="px-6 py-4">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-1/3 px-4 pr-0">
        <div class="max-w-sm rounded overflow-hidden shadow-lg h-card">
            <img class="w-full h-64" src="https://picsum.photos/200?random={{random_int(1, 1000)}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{$this->people[2]}}</div>
            </div>
            <div class="px-6 py-4">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
            </div>
        </div>
    </div>
</div>
