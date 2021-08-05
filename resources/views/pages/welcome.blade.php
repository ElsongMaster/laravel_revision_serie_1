


@extends('template.index')



@section('content')
@if(is_numeric($var))
<h3>Resultat de {{$var}}*3 est {{$var*3}}</h3>
@else
<h3 style="color: red">La valeur de la variable  recu n'est pas un nombre!</h3>
@endif    
@endsection
