@extends('layouts.base')

@section('title', __('main.title'))
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   <style>
        #mapid { height: 360px; }
   </style>
@section('content')
    <div id="main">
        <h1>This is my body content.</h1>
        <b-button variant="danger">Button</b-button>
        <div id="mapid"></div>
    </div>
@endsection

@push('scripts')
<script src="{{ asset('/js/index.vue.js') }}"></script>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
@endpush