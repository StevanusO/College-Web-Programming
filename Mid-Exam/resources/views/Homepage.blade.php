@extends('template')

@section('title', 'Home')

@section('content')
    <div class="card">
        <div class="card-body bg-dark-50 text-black fw-bold fs-1 text-center">
            Book List
        </div>
    </div>

    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($book_data as $item)
                <div class="col row-eq-height">
                    <div class="card text-center">
                        <img src="{{ $item->image }}" alt="{{ $item->title }}" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $item->title }}</h5>
                            <p class="card-text">By</p>
                            <p class="card-text fw-semibold">{{ $item->author }}</p>
                            <form action="{{ route('getBookDetail', ['id' => $item->id]) }}" method="POST">
                                @csrf
                                <button class="btn btn-primary">Details</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination justify-content-center">
            {{ $book_data->links() }}
        </div>
    </div>
@endsection
