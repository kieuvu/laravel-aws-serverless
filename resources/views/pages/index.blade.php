@extends('layouts.default')
@section('content')
<div class="d-flex flex-column align-items-center justify-content-center vh-100">
    <ul>
        @for ($i = 0; $i < count($routeArray); $i++)
            <li>
                {{$routeArray[$i]["uri"]}}
            </li>
        @endfor
    </ul>
</div>
@stop
