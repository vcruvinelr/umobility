@extends('layouts.base')


@section('content')
    <div id="addArticle">
        <p>Teste<p>
    
    <add-article></add-article>

    </div>
@endsection

@push('scripts')
<script src="{{ asset('/js/add_article.vue.js') }}"></script>
@endpush

