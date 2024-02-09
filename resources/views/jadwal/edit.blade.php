@extends('layout.menu')
@section('content')
<div class="text-center bg-white p-5 rounded-lg border-[1.5px] border-slate-400 w-4/5">
    <h1 class="text-2xl font-bold mb-5">
        Edit Jadwal - 
        <script>
            var angkatan = "{{ substr($kelasAngkatan, 0, 2) }}";
            if (angkatan == "10") {
                document.write("X")
            }
            if (angkatan == "11") {
                document.write("XI")
            }
            if (angkatan == "12") {
                document.write("XII")
            }
        </script>
        {{ substr($kelasAngkatan, 2, 1) }}
    </h1>
    <form action="{{ route('jadwal.update', $kelasAngkatan) }}" method="post">
        @csrf
        @method('PUT')
        <div class="flex mb-5">
            <div class="grid grid-rows-6 border-y border-l border-slate-400 bg-white">
                <div class="border border-slate-400 grid place-items-center px-5"></div>
                <div class="border border-slate-400 grid place-items-center px-5">Mon</div>
                <div class="border border-slate-400 grid place-items-center px-5">Tue</div>
                <div class="border border-slate-400 grid place-items-center px-5">Wed</div>
                <div class="border border-slate-400 grid place-items-center px-5">Thu</div>
                <div class="border border-slate-400 grid place-items-center px-5">Fri</div>
            </div>
            <div class="grid grid-cols-10 border-y border-r border-slate-400 bg-white flex-grow">
                <div class="border border-slate-400 h-12 grid place-items-center">1</div>
                <div class="border border-slate-400 grid place-items-center">2</div>
                <div class="border border-slate-400 grid place-items-center">3</div>
                <div class="border border-slate-400 grid place-items-center">4</div>
                <div class="border border-slate-400 grid place-items-center">5</div>
                <div class="border border-slate-400 grid place-items-center">6</div>
                <div class="border border-slate-400 grid place-items-center">7</div>
                <div class="border border-slate-400 grid place-items-center">8</div>
                <div class="border border-slate-400 grid place-items-center">9</div>
                <div class="border border-slate-400 grid place-items-center">10</div>
                @foreach ($jadwal as $d)
                <div class="border border-slate-400 h-12">
                    <select name="{{ $loop->iteration }}" id="" onchange="changeColor(this)" class="w-full h-full hover:brightness-95 transition" style="background-color: {{ $d->mapel->guru->warna }}">
                        @foreach ($mapel as $e)
                        <option value="{{ $e->id_mapel }}" style="background-color: {{ $e->guru->warna }}" {{ ($d->id_mapel == $e->id_mapel ? "selected":"") }}>{{ $e->nama_mapel }} - {{ $e->guru->nama_guru }}</option>
                        @endforeach
                    </select>
                </div>
                @endforeach
            </div>
        </div>
        <button type="submit" class="bg-black text-white py-2 px-5 rounded-full hover:bg-white hover:text-black transition border border-black">Simpan</button>
    </form>
</div>
<script>
    function changeColor(el) {
        var selectedOption = el.options[el.selectedIndex];
        var computedStyle = window.getComputedStyle(selectedOption);
        var backgroundColor = computedStyle.backgroundColor;
        el.style.backgroundColor = backgroundColor;
    }
</script>
@endsection