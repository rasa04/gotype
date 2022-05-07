<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>GO Type</title>
</head>
<body>
    <div id="app">
        <div id="words-line">
            <p id="words">
            @php
                function wordGen()
                {
                    $ltrs_consonants = 'BCDFGHJKLMNPQRSTVWXZ';
                    $ltrs_vowels = 'AEIOUY';
                    $ltrs_len = rand(2, 5);
                    for ($i=0; $i < $ltrs_len; $i++) {
                        echo $ltrs_consonants[rand(0, 19)]
                        . $ltrs_vowels[rand(0, 5)];
                    }
                }
                for ($i=0; $i < 10; $i++) { 
                    echo wordGen() . '&ensp;';
                }
            @endphp
            </p>
        </div>
        <div id="keyboard">
            <div class="column1">
                @foreach ($col[0] as $key)
                    <div class="bt"><p>{{ $key }}</p></div>
                @endforeach
            </div>
            <div class="column2">
                @foreach ($col[1] as $key)
                    <div class="bt"><p>{{ $key }}</p></div>
                @endforeach
            </div>
            <div class="column3">
                @foreach ($col[2] as $key)
                    <div class="bt"><p>{{ $key }}</p></div>
                @endforeach
            </div>
        </div>
    </div>


    
    <script src="https://unpkg.com/vue@3"></script>
    <script src="app.js"></script>
</body>
</html>