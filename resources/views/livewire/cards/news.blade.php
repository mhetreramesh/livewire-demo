<div class="w-full lg:w-1/2 px-4 mb-8">

    <div class="max-w-sm w-full lg:max-w-full lg:flex h-card">
        <div class="lg:h-auto lg:w-64 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
             style="background-image: url('https://picsum.photos/300?random={{random_int(1, 1000)}}')" title="Woman holding a mug">
        </div>
        <div class="text-left border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <div class="text-gray-900 font-bold text-xl mb-2">{{$this->title}}</div>
                <p class="text-gray-700 text-base">{!! $this->description !!}</p>
            </div>
            <div class="flex items-center">
                <img class="w-10 h-10 rounded-full mr-4" src="https://picsum.photos/300?random={{random_int(1, 1000)}}" alt="Avatar of Jonathan Reinink">
                <div class="text-sm">
                    <p class="text-gray-900 leading-none">{{$this->author}}</p>
                    <p class="text-gray-600">Aug 18</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Do one poll after 10ms
        setTimeout(() => {
            setInterval(() => {
                @this.call('$refresh')
            }, 10000)
        }, {{$this->poll}})
    </script>
</div>

