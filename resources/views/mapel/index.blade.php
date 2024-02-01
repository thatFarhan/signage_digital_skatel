@extends('layout.menu')
@section('content')
<div class="h-5/6 w-3/4">
    <div class="flex items-end justify-between mb-5 h-[10%]">
        <div class="">
            <h1 class="font-bold text-2xl">Daftar Mapel</h1>
        </div>
        @if(session('warning'))
            <div class="bg-red-400 text-red-900 px-5 py-2 rounded-md" id="flash">
                {{ session('warning') }}
            </div>
        @endif
        <a href="{{ route('mapel.create') }}"><div class="px-5 py-2 bg-black hover:bg-white text-white hover:text-black transition w-fit rounded-full border-[1.5px] border-black">Tambah Mapel</div></a>
    </div>
    <div class="overflow-auto h-4/5">
        <table class="border border-collapse border-slate-400 bg-white w-full">
            <thead class="">
                <tr>
                    <th class="border border-slate-400 px-2 py-2 w-1">No.</th>
                    <th class="border border-slate-400 px-5 py-2">Nama Mapel</th>
                    <th class="border border-slate-400 px-5 py-2">Nama Guru</th>
                    <th class="border border-slate-400 px-5 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($mapel as $d)
                <tr>
                    <td class="border border-slate-400 px-2 py-2">{{$loop->iteration}}</td>
                    <td class="border border-slate-400 px-5 py-2">{{$d->nama_mapel}}</td>
                    <td class="border border-slate-400 px-5 py-2">{{$d->guru->nama_guru}}</td>
                    <td class="border border-slate-400 px-5 py-2 w-1">
                        <div class="flex justify-center gap-2">
                            <div class="w-fit h-fit bg-green-400 hover:bg-green-500 transition p-2 rounded-md">
                                <a href="{{ route('mapel.edit', $d->id_mapel) }}" class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                    </svg>
                                </a>
                            </div>
                            <form onsubmit="return confirm('Yakin dihapus');" method="post" action="{{ route('mapel.destroy', $d->id_mapel) }}" class="h-[36px]">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <div class="w-fit bg-red-500 hover:bg-red-600 transition p-2 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    setTimeout(function() {
        var flash = document.getElementById('flash');
        if (flash != null){
            document.getElementById('flash').style.display = 'none';
        }
    }, 5000);
</script>
@endsection