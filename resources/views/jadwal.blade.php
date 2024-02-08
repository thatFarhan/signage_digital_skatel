<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="font-inter" onload="[startTime(), scrollDownGT(), scrollDownKA()]">
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
                              <li class="splide__slide flex">
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
                                        <div id="jp1X" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">1</div>
                                        @foreach ($jadwalX1 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp2X" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">2</div>
                                        @foreach ($jadwalX2 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp3X" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">3</div>
                                        @foreach ($jadwalX3 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div id="break1X" class="border border-slate-400 grid place-content-center">
                                        <div class="-rotate-90 text-center text-3xl w-96">Break</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp4X" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">4</div>
                                        @foreach ($jadwalX4 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp5X" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">5</div>
                                        @foreach ($jadwalX5 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp6X" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">6</div>
                                        @foreach ($jadwalX6 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div id="break2X" class="border border-slate-400 grid place-content-center">
                                        <div class="-rotate-90 text-center text-3xl w-96">Break</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp7X" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">7</div>
                                        @foreach ($jadwalX7 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp8X" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">8</div>
                                        @foreach ($jadwalX8 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp9X" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">9</div>
                                        @foreach ($jadwalX9 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp10X" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl rounded-tr-lg">10</div>
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

                              <li class="splide__slide flex">
                                <div class="grid grid-cols-[repeat(13,minmax(0,1fr))] border border-slate-400 rounded-lg col-span-2 break-all">
                                    <div class="grid grid-rows-8">
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl rounded-tl-lg"></div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">XI A</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">XI B</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">XI C</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">XI D</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">XI E</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">XI F</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl rounded-bl-lg">XI G</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp1XI" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">1</div>
                                        @foreach ($jadwalXI1 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp2XI" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">2</div>
                                        @foreach ($jadwalXI2 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp3XI" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">3</div>
                                        @foreach ($jadwalXI3 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div id="break1XI" class="border border-slate-400 grid place-content-center">
                                        <div class="-rotate-90 text-center text-3xl w-96">Break</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp4XI" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">4</div>
                                        @foreach ($jadwalXI4 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp5XI" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">5</div>
                                        @foreach ($jadwalXI5 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp6XI" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">6</div>
                                        @foreach ($jadwalXI6 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div id="break2XI" class="border border-slate-400 grid place-content-center">
                                        <div class="-rotate-90 text-center text-3xl w-96">Break</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp7XI" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">7</div>
                                        @foreach ($jadwalXI7 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp8XI" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">8</div>
                                        @foreach ($jadwalXI8 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp9XI" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">9</div>
                                        @foreach ($jadwalXI9 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp10XI" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl rounded-tr-lg">10</div>
                                        @foreach ($jadwalXI10 as $d)
                                            @if($loop->index != 6)
                                                <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                            @else
                                                <div class="border border-slate-400 text-center p-2 grid place-items-center rounded-br-lg" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                              </li>

                              <li class="splide__slide flex">
                                <div class="grid grid-cols-[repeat(13,minmax(0,1fr))] border border-slate-400 rounded-lg col-span-2 break-all">
                                    <div class="grid grid-rows-8">
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl rounded-tl-lg"></div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">XII A</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">XII B</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">XII C</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">XII D</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">XII E</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">XII F</div>
                                        <div class="border border-slate-400 text-center p-2 grid place-items-center text-2xl rounded-bl-lg">XII G</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp1XII" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">1</div>
                                        @foreach ($jadwalXII1 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp2XII" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">2</div>
                                        @foreach ($jadwalXII2 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp3XII" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">3</div>
                                        @foreach ($jadwalXII3 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div id="break1XII" class="border border-slate-400 grid place-content-center">
                                        <div class="-rotate-90 text-center text-3xl w-96">Break</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp4XII" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">4</div>
                                        @foreach ($jadwalXII4 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp5XII" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">5</div>
                                        @foreach ($jadwalXII5 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp6XII" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">6</div>
                                        @foreach ($jadwalXII6 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div id="break2XII" class="border border-slate-400 grid place-content-center">
                                        <div class="-rotate-90 text-center text-3xl w-96">Break</div>
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp7XII" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">7</div>
                                        @foreach ($jadwalXII7 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp8XII" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">8</div>
                                        @foreach ($jadwalXII8 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp9XII" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl">9</div>
                                        @foreach ($jadwalXII9 as $d)
                                            <div class="border border-slate-400 text-center p-2 grid place-items-center" style="background-color: {{$d->mapel->guru->warna}}">{{$d->mapel->nama_mapel}}</div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-rows-8">
                                        <div id="jp10XII" class="border border-slate-400 text-center p-2 grid place-items-center text-2xl rounded-tr-lg">10</div>
                                        @foreach ($jadwalXII10 as $d)
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