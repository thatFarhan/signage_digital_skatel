@extends('layout.menu')
@section('content')
<div class="h-5/6 w-3/4">
    <div class="grid place-items-end mb-5 h-[10%]">
        <a href="{{ route('guru.create') }}"><div class="px-5 py-2 bg-black hover:bg-white text-white hover:text-black transition w-fit rounded-full border-[1.5px] border-black">Tambah Guru</div></a>
    </div>
    <div class="overflow-auto h-4/5">
        <table class="border border-collapse border-slate-400 bg-white w-full">
            <thead class="">
                <tr>
                    <th class="border border-slate-400 px-2 py-2 w-1">No.</th>
                    <th class="border border-slate-400 px-5 py-2">Nama Guru</th>
                    <th class="border border-slate-400 px-5 py-2">Warna</th>
                    <th class="border border-slate-400 px-5 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($guru as $d)
                <tr>
                    <td class="border border-slate-400 px-2 py-2">{{$loop->iteration}}</td>
                    <td class="border border-slate-400 px-5 py-2">{{$d->nama_guru}}</td>
                    <td class="border border-slate-400 px-5 py-2" style="background-color: {{$d->warna}}">{{$d->warna}}</td>
                    <td class="border border-slate-400 px-5 py-2">
                        <div class="w-fit bg-emerald-300 p-2 rounded-md mx-auto">
                            <a href="{{ route('guru.edit', $d->id_guru) }}" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection