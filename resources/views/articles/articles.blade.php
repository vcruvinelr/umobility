<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('layouts.base')


@section('content')
    <div id="article">
        <add-articles></add-articles>
    </div>
@endsection

@push('scripts')
<script src="{{ asset('/js/add_article.vue.js') }}"></script>
@endpush