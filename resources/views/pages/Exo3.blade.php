@extends('template.index')

@section('content')

@if(is_numeric($var2) && is_numeric($var3) )
<h3>{{$var2}} x {{$var3}} = {{$var2*$var3}}</h3>
<h3>{{$var2}} - {{$var3}} = {{$var2-$var3}}</h3>
@else
    @if (is_numeric($var2))
        <h3 style="color: red">La deuxième variable n'est pas un nombre</h3>
    @elseif (is_numeric($var3))
           <h3 style="color: red">La première variable n'est pas un nombre</h3>  
           
    @else
        <h3 style="color: red">Aucune des 2 varibales n'est un nombre</h3>

    @endif
@endif
@endsection