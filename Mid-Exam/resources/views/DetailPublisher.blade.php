@extends('template')

@section('title', $publisher->name)

@section('content')
    <div class="card bg-info">
        <img src="{{ $publisher->image }}" alt="{{ $publisher->name }}" class="card-img-top p-5">
        <div class="card-body bg-dark-50 text-black fs-1">
            <p class="card-text fw-bold text-center">{{ $publisher->name }}</p>
            <p class="card-text">Phone: {{ $publisher->phone }}</p>
            <p class="card-text">Email: {{ $publisher->email }}</p>
            <p class="card-text">Address: {{ $publisher->address }}</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($publisher->publishRel as $pub)
                <div class="col row-eq-height">
                    <div class="card">
                        <img src="{{ $pub->image }}" alt="{{ $pub->title }}" class="card-img-top p-5">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-center">{{ $pub->title }}</h5>
                            <p class="card-text fw-semibold">Author: {{ $pub->author }}</p>
                            <p class="card-text fw-semibold">Year: {{ $pub->year }}</p>
                            <p class="card-text fw-semibold">Synopsis:</p>
                            <p class="card-text fw-semibold text-justify">{{ $pub->synopsis }}</p>

                            <div class="d-flex justify-content-center">
                                <form action="{{ route('getBookDetail', ['id' => $pub->id]) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-primary">Details</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
