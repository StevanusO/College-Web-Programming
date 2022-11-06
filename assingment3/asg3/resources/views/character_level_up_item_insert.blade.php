@extends('template')

@yield('title', 'Add new Material')

@section('content')
    <section class="overflow-hidden" style="background:  #4d88ff;">
        <div class="container medium mt-5">

            <form action="{{ route('Material_Character_InsertHandler') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                    @error('description')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="materialType" class="form-label">Material Type</label>
                    <select name="materialType" id="materialType" class="form-select" name="materialType">
                        <option selected>Material Type</option>
                        <option value="Character Level-Up Material">Character Level-Up Material</option>
                    </select>
                    @error('materialType')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="rarity" class="form-label">Rarity</label>
                    <input type="range" name="rarity" id="rarity" class="form-range" min="1" max="4"
                        step="1" name="rarity">
                    @error('rarity')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="obtainedFrom" class="form-label">Obtain From?</label>
                    <input type="text" class="form-control" id="obtainedFrom" name="obtainedFrom">
                    @error('obtainedFrom')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="imgUrl" class="form-label">Image URL</label>
                    <input type="text" class="form-control" id="imgUrl" name="imgUrl">
                    @error('imgUrl')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-outline-light">
                </div>
            </form>

        </div>
    </section>
@endsection
