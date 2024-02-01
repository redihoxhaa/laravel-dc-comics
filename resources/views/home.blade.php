@extends('templates.template')

@include('subs.header')

@section('title')
    Titolo di prova
@endsection

@section('main')
    <main>
        <img src="{{ Vite::asset('resources/img/cj.jpg') }}" alt="">
        <p>This is the main section of the main page</p>
        <a href="{{ route('second') }}">Go to the second page</a>
    </main>
@endsection

@include('subs.footer')
