@extends('master')
@section('title', 'Клининг Чистюля')
@section('description','Заполни описание')
@section('keywords', 'Заполни ключевые слова')
@section('content')
    <main class="main">
        {{-- @include('../sections.hero')         --}}
        {{-- @include('../sections.advantages')         --}}
        {{-- @include('../sections.about')         --}}
        {{-- @include('../sections.services')         --}}
        {{-- @include('../sections.works')         --}}
        {{-- @include('../sections.reviews')         --}}
        @include('../sections.contacts')        
    </main>
@endsection
