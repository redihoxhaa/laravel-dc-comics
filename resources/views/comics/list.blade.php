@extends('templates.template')

@include('subs.header')

@section('title')
    Our Comics
@endsection

@section('main')
    <main class="all-comics d-flex flex-column align-items-center">

        {{-- Collegamento a tutti i fumetti --}}
        <a href="{{ route('comics.create') }}" class="btn btn-success text-uppercase mb-5">Create a new
            comic</a>

        <ul class="row g-5">
            @foreach ($comics as $comic)
                <li class="col-12 col-md-6 d-flex">
                    <div class="card w-100">

                        {{-- Immagine fumetto --}}
                        <a href="{{ route('comics.show', $comic) }}">
                            <div class="pic-container">
                                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} thumb">
                            </div>
                        </a>

                        <div class="card-body d-flex flex-column">

                            {{-- Titolo fumetto --}}
                            <a href="{{ route('comics.show', $comic) }}">
                                <h3 class="title pt-3">{{ $comic->title }}</h3>
                            </a>

                            {{-- Sezione tipo, serie ed editore --}}
                            <div class="type-series-publisher pb-3 pt-2">
                                is a
                                <span class="text-uppercase">{{ $comic->type }}</span>
                                of
                                <span class="text-uppercase">{{ $comic->series }}</span>
                                series
                                @isset($comic->publisher)
                                    , published by <span class="text-uppercase">{{ $comic->publisher }}</span>
                                @endisset
                            </div>

                            {{-- Prezzo fumetto --}}
                            <span class="price">Price: ${{ $comic->price }}</span>

                            {{-- Data di messa in vendita fumetto --}}
                            <span class="release-date text-uppercase py-3">Released on
                                {{ \Carbon\Carbon::parse($comic->sale_date)->format('M d Y') }}</span>

                            {{-- Descrizione fumetto --}}
                            <p class="description">{{ $comic->description }}</p>

                            {{-- Autori fumetto --}}
                            <div class="writers card mb-4">
                                <div class="card-header">
                                    Writers
                                </div>
                                <div class="p-3">
                                    <span>{{ $comic->writers }}</span>
                                </div>
                            </div>

                            {{-- Artisti fumetto --}}
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
                </li>
            @endforeach
        </ul>



    </main>
@endsection

@include('subs.footer')
