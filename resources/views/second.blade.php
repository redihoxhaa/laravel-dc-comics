@extends('templates.template')

@include('subs.header')

@section('title')
    Titolo di prova seconda pagina
@endsection

@section('main')
    <main>
        <img src="{{ Vite::asset('resources/img/cj.jpg') }}" alt="">
        <p>This is the main section of the second page</p>
        <a href="{{ route('home') }}">Go to the first page</a>
    </main>
@endsection

@include('subs.footer')
