<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="font-inter" onload="[startTime(), highlightJP(), scrollDownGT(), scrollDownKA()]">
    <div class="flex flex-col h-screen w-screen px-20 py-16">
        <div class="flex justify-between">
            <img src="/asset/img/logo_sekolah.png" alt="" class="h-16">
            <div class="grid grid-cols-2 gap-6">
                <div class="border-[1.5px] border-slate-400 text-2xl font-semibold h-16 rounded-lg px-10 grid place-content-center" id="clock"></div>
                <div class="border-[1.5px] border-slate-400 text-2xl font-semibold h-16 rounded-lg px-10 grid place-content-center">
                    {{date('d/m/Y')}}
                </div>
            </div>
        </div>
        

        <div class="mt-16 grid grid-cols-3 gap-3 flex-grow"> 

            <section class="splide col-span-2 flex">
                <div class="splide__slider flex">
                      <div class="splide__track flex">
                          <ul class="splide__pagination hidden"></ul>
                          <ul class="splide__list flex">
                              <li class="splide__slide flex" data-splide-interval="10000">
                                <div class="grid grid-cols-[repeat(13,minmax(0,1fr))] border border-slate-400 rounded-lg col-span-2 break-all">
                                    <div class="grid grid-rows-8">
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl rounded-tl-lg"></div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">X A</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">X B</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">X C</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">X D</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">X E</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">X F</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl rounded-bl-lg">X G</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp1" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">1</div>
                                        @foreach ($jadwalX1 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp2" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">2</div>
                                        @foreach ($jadwalX2 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp3" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">3</div>
                                        @foreach ($jadwalX3 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div id="break1" class="border border-slate-400 grid place-content-center">
                                        <div class="-rotate-90 text-center text-3xl w-96">Break</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp4" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">4</div>
                                        @foreach ($jadwalX4 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp5" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">5</div>
                                        @foreach ($jadwalX5 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp6" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">6</div>
                                        @foreach ($jadwalX6 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div id="break2" class="border border-slate-400 grid place-content-center">
                                        <div class="-rotate-90 text-center text-3xl w-96">Break</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp7" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">7</div>
                                        @foreach ($jadwalX7 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp8" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">8</div>
                                        @foreach ($jadwalX8 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp9" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">9</div>
                                        @foreach ($jadwalX9 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp10" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl rounded-tr-lg">10</div>
                                        @foreach ($jadwalX10 as $d)
                                            @if($loop->index != 6)
                                                <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                            @else
                                                <div class="border border-slate-400 text-center p-2 grid place-items-center rounded-br-lg" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                              </li>

                              <li class="splide__slide flex" data-splide-interval="10000">
                                <div class="grid grid-cols-[repeat(13,minmax(0,1fr))] border border-slate-400 rounded-lg col-span-2 break-all">
                                    <div class="grid grid-rows-8">
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center rounded-tl-lg"></div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center">XIA</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center">XIB</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center">XIC</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center">XID</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center">XIE</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center">XIF</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center rounded-bl-lg">XIG</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp1" class="border border-slate-400 text-center p-2 grid place-items-center">1</div>
                                        @foreach ($jadwalX1 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp2" class="border border-slate-400 text-center p-2 grid place-items-center">2</div>
                                        @foreach ($jadwalX2 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp3" class="border border-slate-400 text-center p-2 grid place-items-center">3</div>
                                        @foreach ($jadwalX3 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div id="break1" class="border border-slate-400 grid place-content-center">
                                        <div class="-rotate-90 text-center text-3xl w-96">Break</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp4" class="border border-slate-400 text-center p-2 grid place-items-center">4</div>
                                        @foreach ($jadwalX4 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp5" class="border border-slate-400 text-center p-2 grid place-items-center">5</div>
                                        @foreach ($jadwalX5 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp6" class="border border-slate-400 text-center p-2 grid place-items-center">6</div>
                                        @foreach ($jadwalX6 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div id="break2" class="border border-slate-400 grid place-content-center">
                                        <div class="-rotate-90 text-center text-3xl w-96">Break</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp7" class="border border-slate-400 text-center p-2 grid place-items-center">7</div>
                                        @foreach ($jadwalX7 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp8" class="border border-slate-400 text-center p-2 grid place-items-center">8</div>
                                        @foreach ($jadwalX8 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp9" class="border border-slate-400 text-center p-2 grid place-items-center">9</div>
                                        @foreach ($jadwalX9 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp10" class="border border-slate-400 text-center p-2 grid place-items-center rounded-tr-lg">10</div>
                                        @foreach ($jadwalX10 as $d)
                                            @if($loop->index != 6)
                                                <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                            @else
                                                <div class="border border-slate-400 text-center p-2 grid place-items-center rounded-br-lg" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                              </li>

                              <li class="splide__slide flex" data-splide-interval="10000">
                                <div class="grid grid-cols-[repeat(13,minmax(0,1fr))] border border-slate-400 rounded-lg col-span-2 break-all">
                                    <div class="grid grid-rows-8">
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center rounded-tl-lg"></div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center">XIIA</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center">XIIB</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center">XIIC</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center">XIID</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center">XIIE</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center">XIIF</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center rounded-bl-lg">XIIG</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp1" class="border border-slate-400 text-center p-2 grid place-items-center">1</div>
                                        @foreach ($jadwalX1 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp2" class="border border-slate-400 text-center p-2 grid place-items-center">2</div>
                                        @foreach ($jadwalX2 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp3" class="border border-slate-400 text-center p-2 grid place-items-center">3</div>
                                        @foreach ($jadwalX3 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div id="break1" class="border border-slate-400 grid place-content-center">
                                        <div class="-rotate-90 text-center text-3xl w-96">Break</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp4" class="border border-slate-400 text-center p-2 grid place-items-center">4</div>
                                        @foreach ($jadwalX4 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp5" class="border border-slate-400 text-center p-2 grid place-items-center">5</div>
                                        @foreach ($jadwalX5 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp6" class="border border-slate-400 text-center p-2 grid place-items-center">6</div>
                                        @foreach ($jadwalX6 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div id="break2" class="border border-slate-400 grid place-content-center">
                                        <div class="-rotate-90 text-center text-3xl w-96">Break</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp7" class="border border-slate-400 text-center p-2 grid place-items-center">7</div>
                                        @foreach ($jadwalX7 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp8" class="border border-slate-400 text-center p-2 grid place-items-center">8</div>
                                        @foreach ($jadwalX8 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp9" class="border border-slate-400 text-center p-2 grid place-items-center">9</div>
                                        @foreach ($jadwalX9 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp10" class="border border-slate-400 text-center p-2 grid place-items-center rounded-tr-lg">10</div>
                                        @foreach ($jadwalX10 as $d)
                                            @if($loop->index != 6)
                                                <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                            @else
                                                <div class="border border-slate-400 text-center p-2 grid place-items-center rounded-br-lg" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                              </li>
                          </ul>
                      </div>

                      <div class="splide__arrows hidden"></div>
                </div>
            </section>
            

            <div class="flex flex-col gap-3">
                <div class="border-[1.5px] border-slate-400 rounded-lg h-1/2">
                    <div class="grid place-content-center font-semibold text-lg border-b-[1.5px] border-slate-300 h-[15%] mx-5">Guru yang Mengajar</div>
                    <div id="guruToday" class="overflow-y-auto sb-hidden h-[85%] mx-7">
                        @foreach ($guruToday as $d)
                            <div class="flex border-b-[1.5px] border-dashed py-2">
                                <div class="grid place-content-center">
                                    <div class="h-5 w-5 mr-5" style="background-color: {{$d->warna}}"></div>
                                </div>
                                <div class="grid place-content-center text-lg">
                                    <div class="">{{$d->nama_guru}}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="border-[1.5px] border-slate-400 rounded-lg h-1/2">
                    <div class="grid place-content-center font-semibold text-lg border-b-[1.5px] border-slate-300 h-[15%] mx-5">Kalender Akademik</div>
                    <div class="overflow-y-auto sb-hidden h-[85%] mx-7 relative flex justify-center" id="events">
                        <table class="absolute w-full">
                            @foreach ($events as $d)
                            <tr class="border-b-[1.5px] border-dashed">
                                <td class="text-lg px-1 py-2 w-[45%]">
                                    <script>
                                        var bulan = ["Januari", "Februari", "Maret", "April", "Mey", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]
                                        var tanggalMulai = "{{ $d->tanggal_mulai }}";
                                        var tanggalSelesai = "{{ $d->tanggal_selesai }}"

                                        var dateStart = new Date(tanggalMulai);
                                        var dateEnd = new Date(tanggalSelesai);

                                        if (tanggalMulai == tanggalSelesai) {
                                            document.write(dateStart.getDate() + " " + bulan[dateStart.getMonth()])
                                        } else {
                                            if (dateStart.getMonth() == dateEnd.getMonth()) {
                                                document.write(dateStart.getDate() + " - " + dateEnd.getDate() + " " + bulan[dateStart.getMonth()])
                                            } else {
                                                document.write(dateStart.getDate() + " " + bulan[dateStart.getMonth()] + " - " + dateEnd.getDate() + " " + bulan[dateEnd.getMonth()])
                                            }
                                        }
                                    </script>
                                </td>
                                <td class="text-lg text-center py-2 w-[10%]">:</td>
                                <td class="text-lg px-1 py-2 w-[45%]">{{ $d->info_akademik }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
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

    function highlightJP() {
        var jp1 = document.getElementById("jp1");
        var jp2 = document.getElementById("jp2");
        var jp3 = document.getElementById("jp3");
        var jp4 = document.getElementById("jp4");
        var jp5 = document.getElementById("jp5");
        var jp6 = document.getElementById("jp6");
        var jp7 = document.getElementById("jp7");
        var jp8 = document.getElementById("jp8");
        var jp9 = document.getElementById("jp9");
        var jp10 = document.getElementById("jp10");
        
        var break1 = document.getElementById("break1");
        var break2 = document.getElementById("break2");

        let currentJp = null;
        let previousJp = null;

        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();

        let hoursToMinutes = h * 60;

        let timeInMinutes = hoursToMinutes + m;

        if (timeInMinutes >= 450 && timeInMinutes <= 494) {
            currentJp = jp1;
        }
        if (timeInMinutes >= 495 && timeInMinutes <= 539) {
            currentJp = jp2;
            previousJp = jp1;
        }
        if (timeInMinutes >= 540 && timeInMinutes <= 584) {
            currentJp = jp3;
            previousJp = jp2;
        }
        if (timeInMinutes >= 585 && timeInMinutes <= 599) {
            currentJp = break1;
            previousJp = jp3;
        }
        if (timeInMinutes >= 600 && timeInMinutes <= 644) {
            currentJp = jp4;
            previousJp = break1;
        }
        if (timeInMinutes >= 645 && timeInMinutes <= 689) {
            currentJp = jp5;
            previousJp = jp4;
        }
        if (timeInMinutes >= 690 && timeInMinutes <= 734) {
            currentJp = jp6;
            previousJp = jp5;
        }
        if (timeInMinutes >= 735 && timeInMinutes <= 779) {
            currentJp = break2;
            previousJp = jp6;
        }
        if (timeInMinutes >= 780 && timeInMinutes <= 824) {
            currentJp = jp7;
            previousJp = break2;
        }
        if (timeInMinutes >= 825 && timeInMinutes <= 869) {
            currentJp = jp8;
            previousJp = jp7;
        }
        if (timeInMinutes >= 870 && timeInMinutes <= 914) {
            currentJp = jp9;
            previousJp = jp8;
        }
        if (timeInMinutes >= 915 && timeInMinutes <= 960) {
            currentJp = jp10;
            previousJp = jp9;
        }

        if (currentJp != null) {
            currentJp.classList.add("bg-slate-200");
            currentJp.classList.add("font-bold");

            if (previousJp != null) {
                previousJp.classList.remove("bg-slate-200");
                previousJp.classList.remove("font-bold");
            }
            setTimeout(highlightJP, 1000);
        }
    }

    function scrollDownGT() {
        var lastPosition;

        var interval = setInterval (() => {
            var guruToday = document.getElementById("guruToday");
            position = guruToday.scrollTop;

            if(position === lastPosition){
                clearInterval(interval);
                setTimeout(scrollUpGT, 2000);
            };
            lastPosition = position;

            guruToday.scrollBy(0, 1);
        }, 20);
    }

    function scrollUpGT() {
        var lastPosition;

        var interval = setInterval (() => {
            var guruToday = document.getElementById("guruToday");
            position = guruToday.scrollTop;

            if(position === lastPosition){
                clearInterval(interval);
                setTimeout(scrollDownGT, 2000);
            };
            lastPosition = position;

            guruToday.scrollBy(0, -1);
        }, 30);
    }

    function scrollDownKA() {
        var lastPosition;

        var interval = setInterval (() => {
            var events = document.getElementById("events");
            position = events.scrollTop;

            if(position === lastPosition){
                clearInterval(interval);
                setTimeout(scrollUpKA, 2000);
            };
            lastPosition = position;

            events.scrollBy(0, 1);
        }, 20);
    }

    function scrollUpKA() {
        var lastPosition;

        var interval = setInterval (() => {
            var events = document.getElementById("events");
            position = events.scrollTop;

            if(position === lastPosition){
                clearInterval(interval);
                setTimeout(scrollDownKA, 2000);
            };
            lastPosition = position;

            events.scrollBy(0, -1);
        }, 30);
    }
</script>

<script>
   var splide = new Splide( '.splide', {
  //type    : 'fade',
  //rewind     : true,
  //rewindSpeed: 1000,
  autoplay: true,
  type    : 'loop',
  perPage : 1,
} );

splide.mount();

</script>