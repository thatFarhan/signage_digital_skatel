@extends('layout.menu')
@section('content')
<div class="bg-white p-5 rounded-lg border-[1.5px] border-slate-400">
    <div class="text-xl font-semibold text-center">
        Edit Kegiatan
    </div>
    <div class="">
        <form action="{{ route('kalender.update', $kalender->id_akademik) }}" method="post" class="">
            @csrf
            @method('PUT')
            <div class="py-5">
                <table>
                    <tr>
                        <td class="p-2">Nama Kegiatan:</td>
                        <td class="p-2"><input type="text" name="info_akademik" id="" value="{{ old('info_akademik', $kalender->info_akademik) }}" class="border-[1.5px] border-slate-300 p-2 rounded-lg w-60"></td>
                    </tr>
                    <tr>
                        <td class="p-2">Tanggal Mulai:</td>
                        <td class="p-2"><input type="date" name="tanggal_mulai" id="" value="{{ old('tanggal_mulai', $kalender->tanggal_mulai) }}" class="border-[1.5px] border-slate-300 p-2 rounded-lg w-60"></td>
                    </tr>
                    <tr>
                        <td class="p-2">Tanggal Selesai:</td>
                        <td class="p-2"><input type="date" name="tanggal_selesai" id="" value="{{ old('tanggal_selesai', $kalender->tanggal_selesai) }}" class="border-[1.5px] border-slate-300 p-2 rounded-lg w-60"></td>
                    </tr>
                </table>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-black text-white py-2 px-5 rounded-full hover:bg-white hover:text-black transition border border-black">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection