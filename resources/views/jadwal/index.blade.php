@extends('layout.menu')
@section('content')
<div class="w-3/4 h-screen overflow-auto text-center">
    <h1 class="text-2xl font-bold my-5">XA</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XB</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XC</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XD</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XE</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XF</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XG</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XIA</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XIB</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XIC</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XID</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XIE</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XIF</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XIG</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XIIA</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XIIB</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XIIC</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XIID</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XIIE</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XIIF</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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

    <h1 class="text-2xl font-bold my-5">XIIG</h1>
    <div class="flex">
        <div class="grid grid-rows-6 border border-slate-400 bg-white">
            <div class="border border-slate-400 py-2 px-5"></div>
            <div class="border border-slate-400 py-2 px-5">Mon</div>
            <div class="border border-slate-400 py-2 px-5">Tue</div>
            <div class="border border-slate-400 py-2 px-5">Wed</div>
            <div class="border border-slate-400 py-2 px-5">Thu</div>
            <div class="border border-slate-400 py-2 px-5">Fri</div>
        </div>
        <div class="grid grid-cols-10 border border-slate-400 bg-white flex-grow">
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