<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="font-inter" onload="startTime()">
    <div class="flex flex-col h-screen w-screen px-20 py-16">
        <div class="flex justify-between">
            <img src="/asset/img/logo_sekolah.png" alt="" class="h-16">
            <div class="grid grid-cols-2 gap-6">
                <div class="border-2 border-slate-400 text-2xl font-semibold h-16 rounded-lg px-10 grid place-content-center" id="clock"></div>
                <div class="border-2 border-slate-400 text-2xl font-semibold h-16 rounded-lg px-10 grid place-content-center">
                    {{date('d/m/Y')}}
                </div>
            </div>
        </div>
        
        <div class="mt-16 grid grid-cols-3 gap-2 flex-grow">
            <div class="grid grid-cols-[repeat(13,minmax(0,1fr))] border border-slate-400 col-span-2 break-all">
                <div class="grid grid-rows-8">
                    <div class="border border-slate-400 text-center p-2 grid place-items-center"></div>
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">XA</div>
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">XB</div>
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">XC</div>
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">XD</div>
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">XE</div>
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">XF</div>
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">XG</div>
                </div>
                <div class="grid grid-rows-8">
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">1</div>
                    @foreach ($jadwalX1 as $d)
                        <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                    @endforeach
                </div>
                <div class="grid grid-rows-8">
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">2</div>
                    @foreach ($jadwalX2 as $d)
                        <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                    @endforeach
                </div>
                <div class="grid grid-rows-8">
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">3</div>
                    @foreach ($jadwalX3 as $d)
                        <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                    @endforeach
                </div>
                <div class="border border-slate-400 grid place-content-center">
                    <div class="-rotate-90 text-center text-3xl w-96">Break</div>
                </div>
                <div class="grid grid-rows-8">
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">4</div>
                    @foreach ($jadwalX4 as $d)
                        <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                    @endforeach
                </div>
                <div class="grid grid-rows-8">
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">5</div>
                    @foreach ($jadwalX5 as $d)
                        <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                    @endforeach
                </div>
                <div class="grid grid-rows-8">
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">6</div>
                    @foreach ($jadwalX6 as $d)
                        <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                    @endforeach
                </div>
                <div class="border border-slate-400 grid place-content-center">
                    <div class="-rotate-90 text-center text-3xl w-96">Break</div>
                </div>
                <div class="grid grid-rows-8">
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">7</div>
                    @foreach ($jadwalX7 as $d)
                        <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                    @endforeach
                </div>
                <div class="grid grid-rows-8">
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">8</div>
                    @foreach ($jadwalX8 as $d)
                        <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                    @endforeach
                </div>
                <div class="grid grid-rows-8">
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">9</div>
                    @foreach ($jadwalX9 as $d)
                        <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                    @endforeach
                </div>
                <div class="grid grid-rows-8">
                    <div class="border border-slate-400 text-center p-2 grid place-items-center">10</div>
                    @foreach ($jadwalX10 as $d)
                        <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                    @endforeach
                </div>
            </div>
            <div class="grid grid-rows-2 gap-2">
                <div class="border-[1.5px] border-slate-400"></div>
                <div class="border-[1.5px] border-slate-400"></div>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    function startTime() {
      const today = new Date();
      let h = today.getHours();
      let m = today.getMinutes();
      let s = today.getSeconds();
      h = checkTime(h);
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s;
      setTimeout(startTime, 1000);
    }
    
    function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
    }
</script>