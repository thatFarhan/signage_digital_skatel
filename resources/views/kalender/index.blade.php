@extends('layout.menu')
@section('content')
<div class="h-3/4 w-3/4 overflow-auto">
    <table class="border border-collapse border-slate-400 bg-white w-full">
        <thead class="">
            <tr>
                <th class="border border-slate-400 px-2 py-2 w-1">No.</th>
                <th class="border border-slate-400 px-5 py-2">Info</th>
                <th class="border border-slate-400 px-5 py-2">Tanggal Mulai</th>
                <th class="border border-slate-400 px-5 py-2">Tanggal Selesai</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($kalender as $d)
            <tr>
                <td class="border border-slate-400 px-2 py-2">{{$loop->iteration}}</td>
                <td class="border border-slate-400 px-5 py-2">{{$d->info_akademik}}</td>
                <td class="border border-slate-400 px-5 py-2">{{$d->tanggal_mulai}}</td>
                <td class="border border-slate-400 px-5 py-2">{{$d->tanggal_selesai}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection