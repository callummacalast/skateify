<x-guest-layout>

    <section class="dark:bg-gray-800 dark:text-gray-100">
        <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
            <a rel="noopener noreferrer" href="#"
                class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
                <img src="https://source.unsplash.com/random/480x360" alt=""
                    class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
                <div class="p-6 space-y-2 lg:col-span-5">
                    <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Noster
                        tincidunt reprimique ad pro</h3>
                    <span class="text-xs dark:text-gray-400">February 19, 2021</span>
                    <p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert
                        putent doctus id.</p>
                </div>
            </a>
            <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($skate_spots as $spot)
                    <a rel="noopener noreferrer" href="{{ route('spots.show', $spot) }}"
                        class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-gray-800 shadow-lg hover:animate-pulse relative">
                        <img role="presentation" class="object-cover w-full  h-44 bg-gray-500"
                            src="https://source.unsplash.com/random/480x360?1">
                        <div class="p-6 space-y-2">
                            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline text-white">{{$spot->title}}</h3>
                            <span class="text-xs text-gray-400">{{ \Carbon\Carbon::parse($spot->created_at)->format('d F ') }}</span>
                            <p class="text-white">{{$spot->description}}</p>
                            <span class="text-xs text-right text-gray-300 absolute right-1 bottom-1">Posted By:{{ $spot->user->name }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="flex justify-center">
                <button type="button"
                    class="px-6 py-3 text-sm rounded-md hover:underline dark:bg-gray-900 dark:text-gray-400">Load more
                    posts...</button>
            </div>
        </div>
    </section>
</x-guest-layout>
