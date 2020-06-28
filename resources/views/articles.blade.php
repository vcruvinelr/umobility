@extends('layouts.base')


@section('content')
    <div id="main">
    @if (count($articles) === 2)
        2 entrada encontrada!
        <p>{{ $articles }}</p>
    @else
    <p>Sem entradas!</p>
    @endif
    </div>
@endsection