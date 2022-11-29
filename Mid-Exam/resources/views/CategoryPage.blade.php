@extends('template')

@section('title', $categories->name)

@section('content')
    <div class="card">
        <div class="card-body bg-dark-50 text-black fw-bold fs-1 text-center">
            {{ $categories->name }}
        </div>
    </div>

    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($temp as $cat)
                <div class="col row-eq-height">
                    <div class="card text-center">
                        <img src="{{ $cat->BookClass->image }}" alt="{{ $cat->BookClass->title }}-img"
                            class="card-img-top img-fluid">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $cat->BookClass->title }}</h5>
                            <p class="card-text">By</p>
                            <p class="card-text fw-semibold">{{ $cat->BookClass->author }}</p>
                            <form action="{{ route('getBookDetail', ['id' => $cat->BookClass->id]) }}" method="POST">
                                @csrf
                                <button class="btn btn-primary">Details</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
