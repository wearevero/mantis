<x-guest-layout title="Status page">
    <div class="text-center items-center justify-center">
        <p class="text-5xl font-extrabold font-display tracking-wide">👻M<span class="animate animate-ping text-pink-800">O</span>RPH.</p>
        <p class="text-3xl text-gray-200 tracking-wide font-montreal mt-5">
           Veronique monitoring page.
        </p>
        <p class="font-montreal text-lg text-gray-200 mt-2 tracking-wide">
            Rendering pages in — {{ number_format(microtime(true) - LARAVEL_START, 2) }} seconds.
        </p>
    </div>
    <div class="mb-10 mt-10">
        @foreach ($website as $web)
            <ul class="border my-4 p-4 bg-white/20 text-white border-transparent bg-opacity-50 text-lg font-thin rounded-lg">
                <li class="flex justify-between">
                    <span class="font-extrabold py-2 px-1 text-md font-display tracking-wide uppercase">
                        {{ $web->name }} 
                        <br>
                        <span class="text-md underline font-montreal"> 
                            <a href="{{ $web->url }}" target="blank">
                                {{ $web->url }}
                            </a>
                        </span>
                    </span>
                    @if($web->active)
                        <span class="bg-green-200/80 justify-center items-center my-auto backdrop-blur-sm border-green-300 border font-montreal text-green-900 px-4 py-1 rounded-xl">                    
                            Operational &nbsp; &#10003;
                        <span>
                    @else
                        <span class="bg-rose-200 backdrop-blur-sm border-rose-300 border text-rose-900 font-montreal px-4 py-1 text-center rounded-xl">
                            Sadly Down &nbsp; &#9747;
                        <span>
                    @endif
                </li>
            </ul>
        @endforeach
    </div>

    <div class="text-center my-10">
        <button class="bg-slate-200/80 text-lg backdrop-blur-sm border-slate-300 border font-montreal text-slate-900 px-4 py-1 rounded-lg hover:text-slate-500">
            <a href={{ route('morph.create') }}>
                Adding a page &nbsp; &plus;
            </a>
        </button>
    </div>

    <footer class="text-white text-lg font-extrabold text-center font-montreal tracking-wide">
        Never Ordinary &copy; {{ strftime('%Y') }} <a href="https://github.com/wearevero" target="blank" class="underline">Veronique Research Dept</a>. All Rights Reserved. 
    </footer>
</x-guest-layout>