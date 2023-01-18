<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Document</title>
</head>
<body class="container m-5">
    <h1 class="text-center m-5 text-uppercase">Treni in partenza oggi</h1>
    <div class="row g-3">
        @foreach ($trains as $train)
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="card-title">stazione di partenza: <span>{{ $train->stazione_partenza }}</span></p>
                        <p class="card-title">stazione di arrivo: <span>{{ $train->stazione_arrivo }}</span></p>
                        <p class="card-text">
                            orario partenza: <span>{{ $train->ora_partenza }}</span>  <br>
                            orario arrivo: <span>{{ $train->ora_arrivo}}</span>
                        </p>
                        <a href="#" class="btn btn-primary">More...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>
</html>
