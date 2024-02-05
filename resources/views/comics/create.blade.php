@extends('templates.template')

@include('subs.header')

@section('title')
    DC Comics
@endsection

@section('main')
    <main class="comic-uploader d-flex flex-column align-items-center">

        <h2>Create another comic</h2>

        {{-- Link per tonare a tutti i fumetti --}}
        <a href="{{ route('comics.index') }}" class="btn btn-danger mb-5 mt-4 text-uppercase">Take a look at all the
            comics</a>

        {{-- Form di upload nuovo fumetto --}}
        <form class="d-flex flex-column align-items-center gap-3 w-100" action="{{ route('comics.store') }}" method="POST">

            {{-- Token autenticazione  --}}
            @csrf

            {{-- Input titolo --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">title</span>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title') }}" required>
                @error('title')
                    <div class="alert alert-danger m-0">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input URL thumb --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">thumb URL</span>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    value="{{ old('thumb') }}" required>
                @error('thumb')
                    <div class="alert alert-danger m-0">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input descrizione --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">description</span>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger m-0">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input data di messa in vendita --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">sale date</span>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                    name="sale_date" value="{{ old('sale_date') }}" required>
                @error('sale_date')
                    <div class="alert alert-danger m-0">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input prezzo --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">price $</span>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                    value="{{ old('price') }}" required>
                @error('price')
                    <div class="alert alert-danger m-0">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input autori --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">writers</span>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers"
                    value="{{ old('writers') }}" required>
                @error('writers')
                    <div class="alert alert-danger m-0">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input artisti --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">artists</span>
                <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists"
                    value="{{ old('artists') }}" required>
                @error('artists')
                    <div class="alert alert-danger m-0">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input editore --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">publisher</span>
                <input type="text" class="form-control @error('publisher') is-invalid @enderror" name="publisher"
                    value="{{ old('publisher') }}" required>
                @error('publisher')
                    <div class="alert alert-danger m-0">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input tipo --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">type</span>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"
                    value="{{ old('type') }}" required>
                @error('type')
                    <div class="alert alert-danger m-0">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input serie --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">series</span>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    value="{{ old('series') }}" required>
                @error('series')
                    <div class="alert alert-danger m-0">{{ $message }}</div>
                @enderror
            </div>

            {{-- Bottone submit --}}
            <button type="submit" class="btn btn-success w-25 my-3">Upload comic</button>
        </form>
    </main>
@endsection

@include('subs.footer')
