@extends('master')
@section('title', 'ООО «Тулэнергосервис»')
@section('description',
    'Наша компании осуществляет поставку запасных частей и вспомогательного оборудования. Специалисты нашей компании
    обладают большим опытом в данной сфере и способны выполнить ремонтные работы любой сложности.
    Мы ремонтируем паровые турбины и вспомогательное оборудование.')
@section('keywords', 'Заполни ключевые слова')
@section('content')
    <main class="main">
        @include('../sections.hero')
        @include('../sections.services')
        @include('../sections.about')
        <div class="bg-shared-1">
            @include('../sections.contacts') 
            @include('components.footer')
        </div>


        {{--
        @include('../sections.advantages')
        @include('../sections.works')
        @include('../sections.reviews')
        --}}

    </main>
@endsection
