<div class="flex items-center justify-center">

    <div class="w-full md:w-full lg:w-1/2 max-w-4xl rounded overflow-hidden shadow-lg m-4 flex justify-center">
        <div class="md:flex-shrink-0">
            <img class="md:w-56"
                 src="{{ $films->poster }}"
                 alt="{{ $films->name }}" />
        </div>
        <div class="flex flex-col flex-grow px-8 py-4 bg-gray-200">
            <h3 class="font-bold text-4xl md:text-2xl lg:text-2xl text-purple-400 movie--title">{{ $films->name }}</h3>
            <span class="movie--year text-xl lg:text-sm lg:mb-4">{{ $films->released_year }}</span>
            <div class="flex-grow">
                <p class="text-xl md:text-base lg:text-base text-indigo-400 leading-snug truncate-overflow">{{ $films->description }}</p>
            </div>
            <div class="flex justify-center items-center">
                <div class="flex items-center mt-2 mb-4">
                    <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                </div>
            </div>
            <div class="button-container flex justify-between mb-2">
                <button class="text-lg lg:text-sm font-bold py-2 px-4 rounded bg-orange-200 text-orange-700">More Info</button>
            </div>
        </div>
    </div>
</div>
<div class="button-container flex justify-center mb-4">
    <button class="text-lg font-black py-2 px-10 rounded mx-5 bg-purple-400 text-white"><</button>
    <button class="text-lg font-black py-2 px-10 mx-5 rounded bg-purple-400 text-white">></button>
</div>