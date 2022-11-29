<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
        <a href="{{ Route('Home') }}" class="navbar-brand fw-bold fs-1 text-white">Giant Book Supplier</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ Route('Home') }}" class="nav-link text-white fw-semibold fs-2">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-semibold fs-2" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu fw-semibold fs-3">
                        <li>
                            <form action="{{ route('getBookByCategory', ['id' => 1]) }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">TextBook</button>
                            </form>
                        </li>
                        <li>
                            <form action="{{ route('getBookByCategory', ['id' => 2]) }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">Dictionary</button>
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold fs-2 text-white" href="{{ Route('getPublisherPage') }}">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold fs-2 text-white" href="{{ Route('Contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
