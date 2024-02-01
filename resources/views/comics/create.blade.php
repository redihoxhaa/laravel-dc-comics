@extends('templates.template')

@include('subs.header')

@section('title')
    DC Comics
@endsection

@section('main')
    <main class="comic-uploader d-flex flex-column align-items-center">
        <a href="{{ route('comics.index') }}" class="btn btn-danger mb-5 text-uppercase">Take a look at all the comics</a>

        <form class="d-flex flex-column align-items-center gap-3 w-100" action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">title</span>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">thumb URL</span>
                <input type="text" class="form-control" name="thumb">
            </div>

            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">description</span>
                <textarea type="text" class="form-control" name="description"></textarea>
            </div>

            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">sale date</span>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>

            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">price $</span>
                <input type="number" class="form-control" name="price">
            </div>

            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">writers</span>
                <input type="text" class="form-control" name="writers">
            </div>

            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">artists</span>
                <input type="text" class="form-control" name="artists">
            </div>

            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">publisher</span>
                <input type="text" class="form-control" name="publisher">
            </div>

            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">type</span>
                <input type="text" class="form-control" name="type">
            </div>

            <div class="input-group flex-nowrap">
                <span class="input-group-text text-capitalize">series</span>
                <input type="text" class="form-control" name="series">
            </div>

            <button type="submit" class="btn btn-success w-25 my-3">Upload comic</button>
        </form>
    </main>
@endsection

@include('subs.footer')
