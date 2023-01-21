<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Belajar view blade</h1>
    Nama : {{$nama}} <br>

    {{-- @foreach ($score as $item)
        nilai : {{"$item"}};
    @endforeach <br> --}}
    

    {{-- @for ($i = 0; $i < 10; $i++)
        joko {{$i}} <br> 
    @endfor --}}


    @forelse ($score as $item)
        nilai : {{$item}} <br>
    @empty
        tidak ada nilai <br>
    @endforelse


    @php
        $i = 0;
    @endphp
    @while ($i < 10)
        {{$i}}
        @php
            $i++
        @endphp
    @endwhile


    {{-- @if ($score > 90 AND $score < 100)
        lulus <br>
    @elseif ($score > 70 && $score < 90)
        bagus <br>
    @else
        ulang lagi <br>
    @endif --}}


    {{-- @switch($score)
        @case(80)
            limayan
            @break
        @case(70)
            remed
            @break
        @default
            udah ga lulus
    @endswitch --}}

    <br>

    {{date(now())}}
</body>
</html>