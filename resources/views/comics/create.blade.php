@extends('templates.template')

@include('subs.header')

@section('title')
    DC Comics
@endsection

@section('main')
    <main class="comic-uploader d-flex flex-column align-items-center">

        {{-- Link per tonare a tutti i fumetti --}}
        <a href="{{ route('comics.index') }}" class="btn btn-danger mb-5 text-uppercase">Take a look at all the comics</a>

        {{-- Form di upload nuovo fumetto --}}
        <form class="d-flex flex-column align-items-center gap-3 w-100" action="{{ route('comics.store') }}" method="POST">

            {{-- Token autenticazione  --}}
            @csrf

            {{-- Input titolo --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">title</span>
                <input type="text" class="form-control" name="title">
            </div>

            {{-- Input URL thumb --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">thumb URL</span>
                <input type="text" class="form-control" name="thumb">
            </div>

            {{-- Input descrizione --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">description</span>
                <textarea type="text" class="form-control" name="description"></textarea>
            </div>

            {{-- Input data di messa in vendita --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">sale date</span>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>

            {{-- Input prezzo --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">price $</span>
                <input type="number" class="form-control" name="price">
            </div>

            {{-- Input autori --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">writers</span>
                <input type="text" class="form-control" name="writers">
            </div>

            {{-- Input artisti --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">artists</span>
                <input type="text" class="form-control" name="artists">
            </div>

            {{-- Input editore --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">publisher</span>
                <input type="text" class="form-control" name="publisher">
            </div>

            {{-- Input tipo --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">type</span>
                <input type="text" class="form-control" name="type">
            </div>

            {{-- Input serie --}}
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">series</span>
                <input type="text" class="form-control" name="series">
            </div>

            {{-- Bottone submit --}}
            <button type="submit" class="btn btn-success w-25 my-3">Upload comic</button>
        </form>
    </main>
@endsection

@include('subs.footer')
