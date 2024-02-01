@extends('templates.template')

@include('subs.header')

@section('title')
    DC Comics
@endsection

@section('main')
    <main class="d-flex flex-column align-items-center">
        <a href="{{ route('comics.index') }}" class="btn btn-danger mb-5 text-uppercase">Take a look at all the comics</a>
    </main>
@endsection

@include('subs.footer')
