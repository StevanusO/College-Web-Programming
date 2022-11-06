@extends('template')

@section('title', 'Character Level Up Materials')

@section('content')
    <section class="overflow-hidden" style="background:  #4d88ff;">
        @if (count($character_level_up_items) < 1)
            <div class="card w-100">
                <div class="card-body bg-black">
                    <h2 class="card-title text-info">No Data!</h2>
                    <h3 class="card-text text-light">Hmm..There is no data found in database.</h3>
                </div>
            </div>
        @else
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($character_level_up_items as $item)
                    <div class="col row-eq-height">
                        <div class="card w-85 border-warning my-3 mx-3">
                            <img src="{{ $item->imgUrl }}" class="card-img-top" alt="{{ $item->name . '-img' }}">
                            <div class="card-body">
                                <h5 class="card-title text-primary">{{ $item->name }}</h5>
                                <p class="card-text">
                                    {{ $item->description }}
                                </p>
                            </div>
                            <ul class="list-group list-group-flush">
                                @if ($item->rarity > 0 && $item->rarity < 2)
                                    <li class="list-group-item">
                                        ⭐
                                    </li>
                                @elseif ($item->rarity > 1 && $item->rarity < 3)
                                    <li class="list-group-item">
                                        ⭐⭐
                                    </li>
                                @elseif ($item->rarity > 2 && $item->rarity < 4)
                                    <li class="list-group-item">
                                        ⭐⭐⭐
                                    </li>
                                @elseif ($item->rarity > 3 && $item->rarity < 5)
                                    <li class="list-group-item">
                                        ⭐⭐⭐⭐
                                    </li>
                                @endif
                                <li class="list-group-item">{{ $item->obtainedFrom }}</li>
                            </ul>
                            <div class="card-body">
                                <form action="{{ route('Material_Character_Delete', ['name' => $item->name]) }}"
                                    method="POST" class="card-link">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
