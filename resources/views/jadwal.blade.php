<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="font-inter p-10">
    <table class="table-auto border-collapse border-black text-center">
        <thead>
            <tr>
                <th class="border border-slate-400"></th>
                <th class="border border-slate-400">1</th>
                <th class="border border-slate-400">2</th>
                <th class="border border-slate-400">3</th>
                <th class="border border-slate-400">4</th>
                <th class="border border-slate-400">5</th>
                <th class="border border-slate-400">6</th>
                <th class="border border-slate-400">7</th>
                <th class="border border-slate-400">8</th>
                <th class="border border-slate-400">9</th>
                <th class="border border-slate-400">10</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td class="border border-slate-400 px-5 py-2">XA</td>
                @foreach ($jadwalXA as $d)
                    <td class="border border-slate-400 px-5 py-2" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</td>
                @endforeach
            </tr>
            <tr>
                <td class="border border-slate-400 px-5 py-2">XB</td>
                @foreach ($jadwalXB as $d)
                    <td class="border border-slate-400 px-5 py-2" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</td>
                @endforeach
            </tr>
            <tr>
                <td class="border border-slate-400 px-5 py-2">XC</td>
                @foreach ($jadwalXC as $d)
                    <td class="border border-slate-400 px-5 py-2" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</td>
                @endforeach
            </tr>
            <tr>
                <td class="border border-slate-400 px-5 py-2">XD</td>
                @foreach ($jadwalXD as $d)
                    <td class="border border-slate-400 px-5 py-2" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</td>
                @endforeach
            </tr>
            <tr>
                <td class="border border-slate-400 px-5 py-2">XE</td>
                @foreach ($jadwalXE as $d)
                    <td class="border border-slate-400 px-5 py-2" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</td>
                @endforeach
            </tr>
            <tr>
                <td class="border border-slate-400 px-5 py-2">XF</td>
                @foreach ($jadwalXF as $d)
                    <td class="border border-slate-400 px-5 py-2" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</td>
                @endforeach
            </tr>
            <tr>
                <td class="border border-slate-400 px-5 py-2">XG</td>
                @foreach ($jadwalXG as $d)
                    <td class="border border-slate-400 px-5 py-2" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
    <br>
    @foreach ($guruToday as $d)
        <p>{{$d->nama_guru}}</p>
    @endforeach
</body>
</html>