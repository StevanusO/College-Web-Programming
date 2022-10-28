@extends('template')

@section('title', 'Home')

@section('content')
    <section>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($pokedexs as $pokedex)
                <div class="col row-eq-height">
                    <div class="card border-warning text-bg-dark mb-3 w-85">
                        <img class="card-img-top img-fluid" src="{{ $pokedex->Photo }}" alt="{{ $pokedex->name . '-img' }}">
                        <div class="card-body">
                            <h5 class="card-title fs-3 text">
                                {{ $pokedex->name }}

                                @if ($pokedex->id > 9)
                                    #0{{ $pokedex->id }}
                                @elseif ($pokedex->id > 99)
                                    #{{ $pokedex->id }}
                                @else
                                    #00{{ $pokedex->id }}
                                @endif
                            </h5>
                            <p class="card-text">{{ $pokedex->Description }}</p>
                            <div class="card-footer">
                                <small class="text-info"><b>Height: {{ $pokedex->Height }}</b></small>
                            </div>
                            <div class="card-footer">
                                <small class="text-info"><b>Weight: {{ $pokedex->Weight }}</b></small>
                            </div>
                            <div class="card-footer">
                                <small class="text-info"><b>Category: {{ $pokedex->category }}</b></small>
                            </div>
                            <div class="card-footer">
                                <small class="text-info"><b>Ability: {{ $pokedex->abilities }}</b></small>
                            </div>
                            <div class="card-footer">
                                <small class="text-info"><b>Type I: {{ $pokedex->type1 }}</b></small>
                            </div>
                            <div class="card-footer">
                                <small class="text-info"><b>Type II:
                                        {{ $pokedex->type2 != null ? $pokedex->type2 : '-' }}</b></small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
