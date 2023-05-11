@extends('master')
@section('title', 'Клининг Чистюля')
@section('description', 'Заполни описание')
@section('keywords', 'Заполни ключевые слова')
@section('content')
    <main class="main">
        @include('../sections.hero')
        @include('../sections.advantages')
        <div class="mask mask-1"></div>
        @include('../sections.about')
        @include('../sections.services')
        <div class="mask mask-2"></div>
        @include('../sections.works')
        @include('../sections.reviews')
        <div class="mask mask-3">
            @include('../sections.contacts')
            @include('components.footer')
        </div>
    </main>
@endsection
