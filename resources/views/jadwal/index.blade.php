@extends('layout.menu')
@section('content')
<div class="h-3/4 w-3/4 overflow-auto">
    <table class="border border-collapse border-slate-400 bg-white w-full display">
        <thead class="">
            <tr>
                <th class="border border-slate-400 px-2 py-2 w-1">No.</th>
                <th class="border border-slate-400 px-5 py-2">Mapel</th>
                <th class="border border-slate-400 px-5 py-2">Hari</th>
                <th class="border border-slate-400 px-5 py-2">JP</th>
                <th class="border border-slate-400 px-5 py-2">Angkatan</th>
                <th class="border border-slate-400 px-5 py-2">Kelas</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($jadwal as $d)
            <tr>
                <td class="border border-slate-400 px-2 py-2">{{$loop->iteration}}</td>
                <td class="border border-slate-400 px-5 py-2">{{$d->mapel->nama_mapel}}</td>
                <td class="border border-slate-400 px-5 py-2">{{$d->hari}}</td>
                <td class="border border-slate-400 px-5 py-2">{{$d->jam_pelajaran}}</td>
                <td class="border border-slate-400 px-5 py-2">{{$d->angkatan}}</td>
                <td class="border border-slate-400 px-5 py-2">{{$d->kelas}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection