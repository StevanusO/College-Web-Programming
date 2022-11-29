@extends('template')

@section('title', 'Contact')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body text-center">
                <p class="fs-1 fw-bold">Contact</p>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-6 row-eq-height">
                <div class="card bg-success">
                    <div class="card-body text-white">
                        <div class="card-title fw-bold">
                            Store Address
                        </div>
                        <p class="card-text text-justify">
                            {{ $address }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 row-eq-height">
                <div class="card bg-success" style="width: 100%;">
                    <div class="card-body text-white">
                        <div class="card-title fw-bold">
                            Open Daily
                        </div>
                        <p class="card-text text-justify">
                            {{ $open }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="card bg-success">
            <div class="card-body text-white">
                <div class="card-title fw-bold">
                    Contact
                </div>
                <p class="card-text text-justify">
                    Phone: {{ $contact }}
                </p>
                <p class="card-text text-justify">
                    Email: {{ $email }}
                </p>
            </div>
        </div>
    </div>
@endsection
