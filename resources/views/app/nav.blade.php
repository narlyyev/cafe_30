<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="storage/images/logo/logo.png" alt="" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Baş Sahypa</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Menýu
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                            <li>
                                <a class="dropdown-item" href="{{ route('categories.show', $category->slug) }}">
                                    {{ $category->name_tm }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Biz barada</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Habarlar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Habarlaşmak üçin</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Dil
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Türkmen</a></li>
                        <li><a class="dropdown-item" href="#">Русский</a></li>
                        <li><a class="dropdown-item" href="#">English</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <div class="me-3">
                    <a class="nav-link" href="{{ route('cart.index') }}">
                        <i class="bi-cart border border-dark rounded-5 px-2 py-1 fs-6"></i>
                        <span class="badge text-bg-danger">{{ $cartIds }}</span>
                    </a>

                </div>
                <div>
                    <a href="tel:+99364788239" class="text-decoration-none ">
                        <div class="text-center rounded-pill px-4 py-3 fs-6 text-light brown_btn">
                            <i class="bi-phone"></i>
                            +99364 788239
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    .brown_btn {
        transition: .3s all;
        background-color: saddlebrown;
    }

    .brown_btn:hover {
        background-color: black;
    }
</style>