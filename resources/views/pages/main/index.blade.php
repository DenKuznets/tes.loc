@extends('master')
@section('title', 'Заполни титул')
@section('description','Заполни описание')
@section('keywords', 'Заполни ключевые слова')
@section('content')
    <main class="main">
        {{-- @include('../sections.hero')         --}}
        @include('../sections.advantages')        
    </main>
@endsection
