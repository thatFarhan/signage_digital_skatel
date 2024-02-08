@extends('layout.menu')
@section('content')
<div class="w-3/4 h-screen overflow-auto text-center">
    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">X A</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '10A') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXA as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">X B</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '10B') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXB as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">X C</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '10C') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXC as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">X D</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '10D') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXD as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">X E</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '10E') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXE as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">X F</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '10F') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXF as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">X G</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '10G') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXG as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">XI A</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '11A') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXIA as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">XI B</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '11B') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXIB as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">XI C</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '11C') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXIC as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">XI D</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '11D') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXID as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">XI E</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '11E') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXIE as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">XI F</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '11F') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXIF as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">XI G</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '11G') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXIG as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">XII A</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '12A') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXIIA as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">XII B</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '12B') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXIIB as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">XII C</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '12C') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXIIC as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">XII D</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '12D') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXIID as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">XII E</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '12E') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXIIE as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">XII F</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '12F') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXIIF as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center items-center gap-3">
        <h1 class="text-2xl font-bold my-5">XII G</h1>
        <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
            <a href="{{ route('jadwal.edit', '12G') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </a>
        </div>
    </div>
    <div class="flex mb-5">
        <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
            <div class="border border-slate-400 py-2">1</div>
            <div class="border border-slate-400 py-2">2</div>
            <div class="border border-slate-400 py-2">3</div>
            <div class="border border-slate-400 py-2">4</div>
            <div class="border border-slate-400 py-2">5</div>
            <div class="border border-slate-400 py-2">6</div>
            <div class="border border-slate-400 py-2">7</div>
            <div class="border border-slate-400 py-2">8</div>
            <div class="border border-slate-400 py-2">9</div>
            <div class="border border-slate-400 py-2">10</div>
            @foreach ($jadwalXIIG as $d)
            <div class="border border-slate-400 py-2" style="background-color: {{ $d->mapel->guru->warna }}">{{ $d->mapel->nama_mapel }}</div>
            @endforeach
        </div>
    </div>
</div>
@endsection