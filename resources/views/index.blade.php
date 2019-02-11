<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>INDEX BLADE FILE</h1>

    <ul>
        @foreach ($cars as $car)
        
        <li><a href="{{ 'http://localhost/VIVIFY/napredni/Laravel/Predavanje_3/radOdKuce/Pon_11_02/cars_windows_4/public/cars/' . $car->id }}">{{ $car->title }}</a></li>



        @endforeach

    </ul>


    
</body>
</html>