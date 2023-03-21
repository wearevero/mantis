<x-guest-layout title="Status page">
    <div class="text-center items-center justify-center">
        <p class="text-5xl flex items-center text-center mx-auto justify-center align-middle font-extrabold text-slate-100 font-display tracking-wide">
            👻M<span class="animate animate-ping text-pink-800">
                <x-feathericon-radio class="animate animate-ping text-pink-800"/>
                </span>
            RPH.
        </p>
        <p class="text-2xl text-gray-200 flex items-center align-middle justify-center tracking-wide font-montreal my-4">
             Veronique monitoring page.
        </p>
        <p class="font-montreal bg-rose-200/20 border-rose-700 w-fit px-4 mx-auto text-lg text-rose-700 border rounded-lg tracking-wide">
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
                        <span class="bg-green-200/80 flex py-2 justify-center items-center my-auto backdrop-blur-sm border-green-300 border font-montreal text-green-900 px-4 rounded-xl">                    
                            Operational &nbsp; <x-feathericon-check-circle class="text-green-900"/>
                        <span>
                    @else
                        <span class="bg-rose-200 flex py-2 items-center my-auto justify-center backdrop-blur-sm border-rose-300 border text-rose-900 font-montreal px-4 text-center rounded-xl">
                            Sadly Down &nbsp; <x-feathericon-alert-octagon class="text-rose-900"/>
                        <span>
                    @endif
                </li>
            </ul>
        @endforeach
    </div>

    <div class="text-center my-10">
        <button class="bg-slate-200/30 items-center align-middle flex mx-auto text-lg backdrop-blur-sm border-slate-200 border font-montreal text-slate-700 cursor-not-allowed px-4 py-2 rounded-lg hover:text-slate-500" disabled>
                Add system &nbsp; <x-feathericon-plus/>
        </button>
    </div>

    <footer class="text-white text-lg font-extrabold text-center font-montreal tracking-wide">
        Never Ordinary &copy; {{ strftime('%Y') }} <a href="https://github.com/wearevero" target="blank" class="underline">Veronique Research Dept</a>. All Rights Reserved. 
    </footer>
</x-guest-layout>