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
<body>
    <div class="row g-3">
        @foreach ($trains as $train)
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->stazione_partenza }}</h5>
                        <h5 class="card-title">{{ $train->stazione_arrivo }}</h5>
                        <p class="card-text">
                            {{ $train->ora_partenza }} <br>
                            {{ $train->ora_arrivo}}
                        </p>
                        <a href="#" class="btn btn-primary">More...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>
</html>
