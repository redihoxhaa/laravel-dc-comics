@extends('templates.template')

@include('subs.header')

@section('title')
    DC Comics
@endsection

@section('main')
    <main>
        <a href="{{ route('comics.index') }}">GUARDA I MIEI FUMETTI</a>

    </main>
@endsection

@include('subs.footer')
