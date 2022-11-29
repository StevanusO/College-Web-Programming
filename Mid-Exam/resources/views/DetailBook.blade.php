@extends('template')
@section('title', 'Book Detail')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body bg-dark-50 text-black fw-bold fs-1 text-center">
                Book Detail
            </div>
        </div>
        <div class="card">
            <img src="{{ $book_data->image }}" alt="{{ $book_data->title }} .-img" class="card-img-top my-2">
            <div class="card-body">
                <p class="card-text">
                    Title: {{ $book_data->title }}
                </p>
                <p class="card-text">
                    Author: {{ $book_data->author }}
                </p>
                <p class="card-text">
                    Publisher: {{ $book_data->publisher->name }}
                </p>
                <p class="card-text">
                    Year: {{ $book_data->year }}
                </p>
                <p class="card-text">
                    Synopsis:
                </p>
                <p class="card-text text-justify">
                    {{ $book_data->synopsis }}
                </p>

            </div>
        </div>
    </div>
@endsection
