@extends('template')

@section('title', 'Publisher')

@section('content')
    <div class="card">
        <div class="card-body bg-dark-50 text-black fw-bold fs-1 text-center">
            Publisher
        </div>
    </div>

    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($publisher as $pub)
                <div class="col row-eq-height">
                    <div class="card">
                        <img src="{{ $pub->image }}" alt="img" class="card-img-top p-5">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-center">{{ $pub->title }}</h5>
                            <p class="card-text fw-semibold">{{ $pub->address }}</p>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('getPublisherBookPage', ['id' => $pub->id]) }}"
                                    class="btn btn-primary text-center">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination justify-content-center">
            {{ $publisher->links() }}
        </div>
    </div>
@endsection
