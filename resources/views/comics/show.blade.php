@extends('templates.template')

@include('subs.header')

@section('title')
    {{ $comic->title }}
@endsection

@section('main')
    <main class="single-comic d-flex flex-column align-items-center">
        <a href="{{ route('comics.index') }}" class="btn btn-danger mb-5">GUARDA TUTTI I FUMETTI</a>

        <div class="row d-flex">
            <div class="col-6">
                <a href="{{ route('comics.show', $comic) }}">
                    <div class="pic-container">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} thumb">
                    </div>
                </a>
            </div>
            <div class="col-6 d-flex flex-column">
                <a href="{{ route('comics.show', $comic) }}">
                    <h3 class="title pt-3">{{ $comic->title }}</h3>
                </a>
                <div class="type-series pb-3 pt-2">
                    is a
                    <span class="text-uppercase">{{ $comic->type }}</span>
                    of
                    <span class="text-uppercase">{{ $comic->series }}</span>
                    series
                </div>
                <span class="price">Price: ${{ $comic->price }}</span>
                <span class="release-date text-uppercase py-3">Released on
                    {{ \Carbon\Carbon::parse($comic->publication_year)->format('M d Y') }}</span>
                <p class="description">{{ $comic->description }}</p>

                <div class="writers card mb-4">
                    <div class="card-header">
                        Writers
                    </div>
                    <div class="p-3">
                        <span>{{ $comic->writers }}</span>
                    </div>
                </div>
                <div class="artists card mb-1">
                    <div class="card-header">
                        Artists
                    </div>
                    <div class="p-3">
                        <span>{{ $comic->artists }}</span>
                    </div>
                </div>

            </div>

        </div>

    </main>
@endsection

@include('subs.footer')
