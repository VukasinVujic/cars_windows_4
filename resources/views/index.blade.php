@extends('layouts.master')

@section('title')

INDEX NASLOV
    
@endsection


@section('sastav')


<ul>
        @foreach ($cars as $car)
        
        <li><a href="{{ 'http://localhost/VIVIFY/napredni/Laravel/Predavanje_3/radOdKuce/Pon_11_02/cars_windows_4/public/cars/' . $car->id }}">{{ $car->title }}</a></li>



        @endforeach

    </ul>



@endsection










    
