<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" {{ mix('/css/app.css') }} ">
</head>
<body>
    <div class="container">
        @foreach ($allTrips as $trip)
            <div class="card">
                <h1>{{$trip -> Destination}}</h1>
                <img src="{{$trip -> Cover}}" alt="immagine di {{$trip -> Destination}}">
                <p>{{$trip -> Description}}</p>
                <div class="price">Prezzo : {{$trip -> Price}} $</div>
                <div class="currency">Valuta locale: {{$trip -> Currency}}</div>
            </div> 
        @endforeach
    </div>    
        <hr>
    <div class="container">
        @foreach ($tripFiltrati as $trip)
            <div class="card">
                <h1>{{$trip -> Destination}}</h1>
                <img src="{{$trip -> Cover}}" alt="immagine di {{$trip -> Destination}}">
                <p>{{$trip -> Description}}</p>
                <div class="price">Prezzo : {{$trip -> Price}} $</div>
                <div class="currency">Valuta locale: {{$trip -> Currency}}</div>
            </div> 
        @endforeach
    </div>
</body>
</html>