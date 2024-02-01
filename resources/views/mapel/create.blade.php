@extends('layout.menu')
@section('content')
<div class="bg-white p-5 rounded-lg border-[1.5px] border-slate-400">
    <div class="text-xl font-semibold text-center">
        Tambah Mapel
    </div>
    <div class="">
        <form action="{{ route('mapel.store') }}" method="post" class="">
            @csrf
            <div class="py-5">
                <table>
                    <tr>
                        <td class="p-2">Nama Mapel:</td>
                        <td class="p-2"><input type="text" name="nama_mapel" id="" class="border-[1.5px] border-slate-300 p-2 rounded-lg w-60"></td>
                    </tr>
                    <tr>
                        <td class="p-2">Nama Guru:</td>
                        <td class="p-2">
                            <select name="id_guru" id="" class="border-[1.5px] border-slate-300 p-2 rounded-lg w-60">
                                <option disabled hidden selected value="">-Pilih Guru-</option>
                                @foreach($guru as $d)
                                <option value="{{ $d->id_guru }}">{{ $d->nama_guru }}</option>
                                @endforeach
                            </select>
                        </td>
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